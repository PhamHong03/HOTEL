<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Roomtype\RoomtypeService;
use App\Http\Services\Room\RoomService;

class HomeController extends Controller
{
    protected $roomtype;
    protected $room;

    public function __construct(RoomtypeService $roomtype, RoomService $room)
    {
        $this->roomtype = $roomtype;
        $this->room = $room;
    }

    public function index() {
        return view('client.home',[
            'title' => 'Khách Sạn Hotaler'
        ]);
    }
    public function rooms() {
        return view('client.rooms', [
            'title' => 'List Room',
            'roomtypes' => $this->roomtype->show(),
            'rooms' => $this->room->get()
        ]);
    }

    public function contact() {

        return view('client.contact',[
            'title' => 'Contact'
        ]);
    }
    public function about() {

        return view('client.about',[
            'title' => 'About'
        ]);
    }

    public function book() {
        
        return view('client.book',[
            'title' => 'Book Now'
        ]);
    }

    public function loadRoom(Request $request) {

        $page = $request->input('page', 0);
        $result = $this->room->get($page);
        
        if(count($result) != 0) {
            $html = view('client.room.list', ['rooms' => $result])->render();

            return response()->json([
                'html' => $html
            ]);
        }
        return response()->json([
            'html' => ''
        ]);
    }

    public function getSearch(Request $request) {
        return view('.client.search', [
            'title' => 'Rooms are searched',
            'rooms' => $this->room->search($request)
        ]);
   }
}
