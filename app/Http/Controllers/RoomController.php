<?php

namespace App\Http\Controllers;

use App\Http\Services\Room\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }
    public function index($id = '', $slug = ''){
        
        $room = $this->roomService->show($id);

        $roomsMore = $this->roomService->more($id);

        return view('client.room.content', [
            'title' => $room->name,
            'room' => $room,
            'rooms' => $roomsMore
        ]);
    }
}
