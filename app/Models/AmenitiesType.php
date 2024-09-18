<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitiesType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'active'
    ];

    public function amenities() {
        
        return $this->hasMany(Amenity::class, 'amenitytype_id', 'id');
    }
}
