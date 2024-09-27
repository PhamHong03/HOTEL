<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest\LoginRequest;
use App\Http\Requests\UserRequest\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

    public function postRegister(RegisterRequest $request) {
        // dd($request->input());
        $request->merge(['password' => Hash::make($request->password)]);
        try{
            User::create($request->all());
        }catch(\Throwable $th){
            Log::error('loi: ' . $th->getMessage());
        }
        return redirect()->route('client-login');
    }
    
    public function postLogin(LoginRequest $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
            if (Auth::user()->active === 1 && Auth::user()->role === 0) {
                return redirect()->route('client-home');
            } else {
                Auth::logout();
            }
        }
        return redirect()->back()->with('error', 'Failed, please check your email or password ');

    }

    public function logout() {
        Auth::logout();
        // session()->pull('carts');
        return redirect()->back();
    }
}
