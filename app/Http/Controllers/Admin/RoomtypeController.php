<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roomtype\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Roomtype\RoomtypeService;
use App\Models\Roomtype;
use GuzzleHttp\Promise\Create;

class RoomtypeController extends Controller
{

    protected  $roomtypeService ;

    public function __construct(RoomtypeService $roomtypeService)
    {   
        $this->roomtypeService = $roomtypeService;
    }

    public function create(){
        
        return view('admin.roomtype.add', [
            'title' => 'Add Room Types',
            'roomtypes' => $this->roomtypeService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request) {
        
        $result = $this->roomtypeService->create($request);
        
        return redirect()->back();
    }

    public function index() {

        return view('admin.roomtype.list', [
            'title' => 'Room Type List',
            'roomtypes' => $this->roomtypeService->getAll()
        ]);
    }

    public function show(Roomtype $roomtype) {
        // dd($roomtype);
        return view('admin.roomtype.edit', [
            'title' => 'Edit ' .$roomtype->name,
            'roomtype' => $roomtype,
            'roomtypes' => $this->roomtypeService->getParent()
        ]);
    }

    public function update(Roomtype $roomtype, CreateFormRequest $request) {
        $this->roomtypeService->update($request, $roomtype);

        return redirect('/admin/roomtypes/list');
    }

    public function destroy(Request $request) {
        $result = $this->roomtypeService->destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete room type successfully'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
