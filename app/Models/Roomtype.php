<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'price',
        'active'
    ];

    public function rooms() {
        
        return $this->hasMany(Room::class, 'roomtype_id', 'id');
    }
}
