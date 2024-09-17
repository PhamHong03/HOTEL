<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {

        return view('client.login',[
            'title' => 'Login'
        ]);
    }
    public function register() {

        return view('client.register',[
            'title' => 'Register'
        ]);
    }

    
}
