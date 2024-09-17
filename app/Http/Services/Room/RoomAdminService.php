<?php

namespace App\Http\Services\Room;

use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str; 

class RoomAdminService {

    public function getRoomtype(){
        return Roomtype::where('active', 1)->where('parent_id', 0)->get();
    }


    protected function isValidPrice($request) {
        if($request->input('price') != 0 && $request->input('price_sale') != 0
            && $request->input('price_sale') >= $request->input('price')) {
                Session::flash('error', 'Price sale is less than price');

                return false;
        }

        if($request->input('price_sale') != 0 && (int)$request->input('price') == 0) {
            Session::flash('error', 'Please enter price for room');
            return false;
        }
        return true;
    }

    public function insert($request) {
        $isValidPrice = $this->isValidPrice($request);

        if($isValidPrice == false ) return false;

        try {
            $request->except('_token'); 
            // dd($request->all());
            Room::create($request->all());

            Session::flash('success', 'Add room successful');
        }catch (\Exception $err) {
            Session::flash('error', 'Add room unsuccessfully');
            Log::info($err->getMessage());
            return false;
        }
        return true;
       
    }  
    
    public function get(){

        return Room::with('roomtype')
            ->orderByDesc('id')->paginate(8);
    }

    public function update($request, $room) {
        $isValidPrice = $this->isValidPrice($request);

        if($isValidPrice == false ) return false;

        try{
            $room->fill($request->input());
            $room->save();

            Session::flash('success', 'Update room successful');
        }catch(\Exception $err){
            Session::flash('error', 'Update room unsuccessful');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request) {
        $room = Room::where('id', $request->input('id'))->first(); 

        if($room) {
            $room->delete();
            return true;
        }
        return false;
    }
}

