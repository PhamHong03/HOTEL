<?php
namespace App\Http\Services\Amenity;

use App\Models\AmenitiesType;
use App\Models\Amenity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AmenityService {

    protected function isValidPrice($request) {
        if($request->input('price') != 0 && $request->input('price_sale') != 0
            && $request->input('price_sale') >= $request->input('price')) {
                Session::flash('error', 'Price sale is less than price');

                return false;
        }

        if($request->input('price_sale') != 0 && (int)$request->input('price') == 0) {
            Session::flash('error', 'Please enter price for room');
            return false;
        }
        return true;
    }


    public function getAmenitytype(){

        return AmenitiesType::where('active', 1)->where('parent_id', 0)->get();
    }

    public function create($request) {
        try{
            $request->except('_token'); 
            Amenity::create($request->all());
            Session::flash('success', 'Create Amenity successfully');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function getAll() {
        return Amenity::with('amenitytype')
            ->orderByDesc('id')->paginate(2);
    }

    public function update($request, $amenity){
        $isValidPrice = $this->isValidPrice($request);

        if($isValidPrice == false ) return false;

        try{
            $amenity->fill($request->input());
            $amenity->save();

            Session::flash('success', 'Update amenity successful');
        }catch(\Exception $err){
            Session::flash('error', 'Update amenity unsuccessful');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request) {
        $amenity = Amenity::where('id', $request->input('id'))->first(); 

        if($amenity) {
            $amenity->delete();
            return true;
        }
        return false;
    }
}