<?php

namespace App\Http\Services\Order;

use App\Jobs\SendMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Catch_;

class OrderService {

    public function addOrder($request) {
        try{
            DB::beginTransaction();
            $customer = Customer::create([
                'name' => $request->input('name') ,
                'email' => $request->input('email'),
                'phone' => $request->input('phone')
            ]);  
            
            $this->inforRoomOrder($request, $customer->id);

            DB::commit();
            Session::flash('success','Order room successful');

            #Queue
            SendMail::dispatch($request->input('email'))->delay(now()->addSecond(2));

        }Catch(\Exception $err) {
            DB::rollBack();
            Session::flash('error', $err->getMessage());
            Log::error('Lỗi khi thêm đơn hàng: ' . $err->getMessage());
            return false;
        }
        return true;    
    }
 
    public function inforRoomOrder($request, $customer_id) {
        $roomIds = $request->input('id_room');

        // Đảm bảo rằng roomIds luôn là một mảng
        if (!is_array($roomIds)) {
            $roomIds = [$roomIds];
        }

        $rooms = Room::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $roomIds)  // Sửa lại để hỗ trợ cả phòng đơn và nhiều phòng
            ->get();
    
        $arrival = Carbon::createFromFormat('d/m/Y', $request->input('arrival'));
        $departure = Carbon::createFromFormat('d/m/Y', $request->input('departure'));
        $stayDay = $departure->diffInDays($arrival);
        
        $data = [];
        
        foreach ($rooms as $room) {
            $price = $room->price - ($room->price * ($room->price_sale / 100));
            $totalPrice = (intval($price) * intval($stayDay)) * intval($request->input('quantity_room')) + intval($request->input('price_amenity'));
            
            $data[] = [
                'customer_id' => $customer_id,
                'room_id' => $room->id,            
                'address' => $request->input('address'),
                'arrival' => $request->input('arrival'),
                'departure' => $request->input('departure'),
                'time_checkin' => $request->input('time_checkin'),
                'time_checkout' => $request->input('time_checkout'),
                'quantity_room' => $request->input('quantity_room'),
                'price_amenity' => $request->input('price_amenity'),
                'amenities' => $request->input('amenities'),
                'total_price' => $totalPrice
            ];
        }
        foreach ($rooms as $room) {
            $roomId = $room->id; 
            DB::table('rooms')->where('id', $roomId)->decrement('quantity', $request->quantity_room);
        }
        return Order::insert($data); 
    }
    
    public function getOrder(){
        
        return Order::orderByDesc('customer_id')->paginate();
    }
    public function getCustomer() {
        // return Customer::orderByDesc('id')->paginate(9);
        return Customer::orderByDesc('id')->paginate();
    }
    public function getCustomerPaginate() {
        return Customer::orderByDesc('id')->paginate(9);
        // return Customer::orderByDesc('id')->paginate();
    }

    public function getProductForOrder($customer) {

        return $customer->orders()->with(['room' => function($query) {
            $query->select('id', 'name', 'thumb', 'price', 'price_sale');
        }])->get() ;
    }
    public function update2($request, $customer){
        // dd($request);
        try{
            
            $customer->status = $request->input('status');
            $customer->save();
            Session::flash('success', 'Update successfully');
        }catch(\Exception $err) {
            dd($err);
            Session::flash('error', 'Error for udpate');

            Log::info($err->getMessage());

            return false;
        }
        return true;
    }
 
}