<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Amenity\AmenityRequest;
use App\Http\Services\Amenity\AmenityService;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    protected $amenity ;

    public function __construct(AmenityService $amenity)
    {
        $this->amenity = $amenity;
    }

    public function create(){

        return view('admin.amenity.add',[
            'title' => 'Add amenity',
            'amenitytypes' => $this->amenity->getAmenitytype()
        ]);
    }

    public function store(AmenityRequest $request) {
        $this->amenity->create($request);

        return redirect()->back();
    }

    public function index(){

        return view('admin.amenity.list', [
            'title' => 'Amenity list',
            'amenities' => $this->amenity->getAll()
        ]);
    }

    public function show(Amenity $amenity) {

        return view('admin.amenity.edit', [
            'title' => 'Edit amenity',
            'amenity' => $amenity,
            'amenities' => $this->amenity->getAmenitytype()
        ]);
    }

    public function update(AmenityRequest $request, Amenity $amenity){
        $result = $this->amenity->update($request, $amenity); 
        if($result) {
            return redirect('admin/amenities/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request) {
        $result = $this->amenity->delete($request);

        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete amenity successful'
            ]);
        }
        return response()->json([ 'error' => true ]);
    }
}
