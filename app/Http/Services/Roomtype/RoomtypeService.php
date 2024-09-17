<?php

namespace App\Http\Services\Roomtype;

use App\Models\Roomtype;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str; 

class RoomtypeService {


    public function getParent(){

        return Roomtype::where('parent_id', 0)->get(); 
    }

    public function getAll(){

        return Roomtype::orderbyDesc('id')->paginate(10);
    }
    public function create($request) {

        try{
            Roomtype::create([
                'name' => (string)$request->input('name'),
                'parent_id' => (int)$request->input('parent_id'),
                'description' => (string)$request->input('description'),
                'price' => (float)$request->input('price'),
                'active' => (string)$request->input('active')
            ]);

            Session::flash('success', 'Create Room type successfully');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request) {

        $id = (int)$request->input('id');

        $roomtype = Roomtype::where('id', $id)->first();

        if($roomtype) {
            return Roomtype::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function update($request, $roomtype){
        if($request->input('parent_id') != $roomtype->id){
            $roomtype->fill($request->input());
        }

        $roomtype->save();

        Session::flash('successs', 'Update Catalog Roomtype successfully');
        return true;
    }

    public function show(){
        return Roomtype::where('active', '1')->orderByDesc('id');
    }

    public function getID($id) {
        
        return Roomtype::where('id', $id)->where('active', 1)->firstOrFail();
    }

    public function getRoom($roomtype){

        return $roomtype->rooms()
            ->select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active',1)
            ->orderByDesc('id')
            ->paginate(6);
    }
 }

