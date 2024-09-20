<?php

namespace App\Http\Services\Room;

use App\Models\Room;
use Illuminate\Cache\RateLimiting\Limit;

class RoomService {

    const LIMIT = 6;

    public function get($page = null) {

        return Room::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->orderByDesc('id')
        ->when($page != null, function($query) use ($page){
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
        ->get();
    }

    public function show($id){
        
        return Room::where('id', $id)
            ->where('active', 1)
            ->with('roomtype')
            ->firstOrFail();
    }

    public function more($id) {
        return Room::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->where('id', '!=' ,$id)
            ->orderByDesc('id')
            ->limit(6)
            ->get();
    }

    public function search($request) {
        return Room::where('name', 'like', '%'.$request->key. '%')
            // ->orwhere('price_sale', $request->key)
            // ->orwhere('price', $request->key)
            ->get();            
    }
}   