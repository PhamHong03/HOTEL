<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenityType\AmenityTypeRequest;
use App\Http\Services\AmenityType\AmenityTypeService;
use App\Models\AmenitiesType;
use Illuminate\Http\Request;

class AmenitiesTypeController extends Controller
{
    protected $amenity ;

    public function __construct(AmenityTypeService $amenity)
    {
        $this->amenity = $amenity;
    }
    public function  create() {
        
        return view('admin.amenitytype.add',[
            'title' => 'Add amenity',
            'amenities' => $this->amenity->getParent()
        ]);
    }

    public function store(AmenityTypeRequest $request) {

        $this->amenity->create($request);

        return redirect()->back();
    }

    public function index() {

        return view('admin.amenitytype.list', [
            'title' => 'Amenity list',
            'amenities' => $this->amenity->getAll()
        ]);
    }

    public function show(AmenitiesType $amenity) {

        return view('admin.amenitytype.edit', [
            'title' => 'Edit Amenity type',
            'amenity' => $amenity,
            'amenities' => $this->amenity->getParent()
        ]);
    }

    public function update(AmenitiesType $amenity, AmenityTypeRequest $request) {
        $this->amenity->update($request, $amenity);

        return redirect('/admin/amenities_type/list');
    }

    public function destroy(Request $request) {

        $result = $this->amenity->delete($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete amenity type successfully'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
