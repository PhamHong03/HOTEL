<?php

namespace App\Http\Controllers;

use App\Http\Services\Roomtype\RoomtypeService;
use App\Http\Services\Room\RoomService;
use Illuminate\Http\Request;


class MainController extends Controller
{
    protected $roomtype ;

    public function __construct(RoomtypeService $roomtype)
    {
        $this->roomtype = $roomtype;
    }
}
