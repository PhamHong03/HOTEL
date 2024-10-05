<?php

namespace App\Http\Controllers;

// use App\Http\Services\Roomtype\RoomtypeService;
// use App\Http\Services\Room\RoomService;

use App\Http\Services\Order\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    // protected $roomtype ;

    // public function __construct(RoomtypeService $roomtype)
    // {
    //     $this->roomtype = $roomtype;
    // }

    protected $orderService ;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function order(Request $request) {

        // dd($request->input());
        $this->orderService->addOrder($request);
        return redirect()->back();
    }

    public function order_detail_customer(){
        $order = $this->orderService->getOrder();
        $users = Auth::user();
        return view('client.order.detail', [
            'title' => 'Order Detail',
            'customers' => $this->orderService->getCustomer(),
            'orders' => $order,
            'users' => $users
        ]); 
    }
}
