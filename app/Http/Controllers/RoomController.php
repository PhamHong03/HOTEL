<?php

namespace App\Http\Controllers;

use App\Http\Services\Amenity\AmenityService;
use App\Http\Services\AmenityType\AmenityTypeService;
use App\Http\Services\Room\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;
    protected $amenity;


    public function __construct(RoomService $roomService, AmenityService $amenity)
    {
        $this->roomService = $roomService;
        $this->amenity = $amenity;
    }
    public function index($id = '', $slug = ''){
        
        $room = $this->roomService->show($id);

        $roomsMore = $this->roomService->more($id);

        $amenity = $this->amenity->show();

 
        return view('client.room.content', [
            'title' => $room->name,
            'room' => $room,
            'rooms' => $roomsMore,
            'amenities' => $amenity
        ]);
    }
}
