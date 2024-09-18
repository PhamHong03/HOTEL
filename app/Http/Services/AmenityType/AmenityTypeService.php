<?php

namespace App\Http\Services\AmenityType;

use App\Models\AmenitiesType;
use Illuminate\Support\Facades\Session;

class AmenityTypeService {

    public function getParent() {

        return AmenitiesType::where('parent_id', 1)->get();
    }

    public function create($request) {

        try{
            AmenitiesType::create([
                'name' => (string)$request->input('name'),
                'parent_id' => (int)$request->input('parent_id'),
                'active' => (string)$request->input('active')
            ]);

            Session::flash('success', 'Create Amenity type successfully');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function getAll(){

        return AmenitiesType::orderbyDesc('id')->paginate(10);
    }
    public function update($request, $amenity) {
        if($request->input('parent_id') != $amenity->id){
            $amenity->fill($request->input());

        }
        $amenity->save();

        Session::flash('successs', 'Update Catalog ame$amenity successfully');
        return true;
    }

    public function delete($request) {
        $id = (int)$request->input('id');

        $amenity = AmenitiesType::where('id', $id)->first();

        if($amenity) {
            return AmenitiesType::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function show(){

        return AmenitiesType::where('active', 1)->get();

        
    }
}