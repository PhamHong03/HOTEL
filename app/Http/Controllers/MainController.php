<?php

namespace App\Http\Controllers;

// use App\Http\Services\Roomtype\RoomtypeService;
// use App\Http\Services\Room\RoomService;

use App\Http\Services\Order\OrderService;
use Illuminate\Http\Request;


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
}
