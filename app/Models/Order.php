<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'room_id',
        'address', 
        'arrival',
        'departure',
        'time_checkin',
        'time_checkout',
        'quantity_room',
        'price_amenity',
        'amenities',
        'total_price'
    ];

    public function room()  {
        return $this->hasOne(Room::class, 'id', 'room_id');
    }
}
