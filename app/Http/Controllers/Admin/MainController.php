<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        
        return view('admin.home', [
            'title' => 'Administrator Page'
        ]);
    }
    public function home() {
        return view('admin.homepage', [
            'title' => 'HomePage for Administrator'
        ]);
    }
}
