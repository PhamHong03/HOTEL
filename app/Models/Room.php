<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'roomtype_id',
        'price',
        'price_sale',
        'thumb',
        'active',
        'quantity',
        'person'
    ];

    public function roomtype(){
        
        return $this->hasOne(Roomtype::class, 'id', 'roomtype_id')
        ->withDefault(['name' => '']);
    }

}
