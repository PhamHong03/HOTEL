<?php

namespace App\Http\Controllers;

use App\Http\Services\Roomtype\RoomtypeService;
use Illuminate\Http\Request;


class RoomTypeController extends Controller
{
    protected $roomtype;

    public function __construct(RoomtypeService $roomtype)
    {
        $this->roomtype = $roomtype;
    }
    public function index(Request $request, $id, $slug = '') {
        $roomtype = $this->roomtype->getID($id);

        $rooms = $this->roomtype->getRoom($roomtype);

        return view('client.roomtype', [
            'title' => $roomtype->name,
            'rooms' => $rooms,
            'roomtype' => $roomtype
        ]);
    }   
}
