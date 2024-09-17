<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Room\RoomAdminService;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomAdServices;

    public function __construct(RoomAdminService $roomAdminServices)
    {   
        $this->roomAdServices = $roomAdminServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.room.list', [
            'title' => 'List room',
            'rooms' => $this->roomAdServices->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.add', [
            'title' => 'Add room',
            'roomtypes' => $this->roomAdServices->getRoomtype()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->roomAdServices->insert($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        
        return view('admin.room.edit', [
            'title' => 'Edit page room',
            'room' => $room,
            'roomtypes' => $this->roomAdServices->getRoomtype()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $result = $this->roomAdServices->update($request, $room); 
        if($result) {
            return redirect('admin/rooms/list');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->roomAdServices->delete($request);

        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete room successful'
            ]);
        }
        return response()->json([ 'error' => true ]);
    }
}
