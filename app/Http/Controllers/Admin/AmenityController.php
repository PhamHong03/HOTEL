<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Amenity\AmenityService;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    protected $amenity ;

    public function __construct(AmenityService $amenity)
    {
        $this->amenity = $amenity;
    }

    public function create(){

        return view('admin.');
    }
}
