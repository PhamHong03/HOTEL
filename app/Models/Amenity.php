<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'amenitytype_id',
        'description',
        'active'
    ];
    
    public function amenitytype() {
        
        return $this->hasOne(AmenitiesType::class, 'id', 'amenitytype_id');
    }
}
