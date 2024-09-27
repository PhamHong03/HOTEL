<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Order\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller

{
    protected $order;

    public function __construct(OrderService $order)
    {
        $this->order = $order;
    }

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

    public function testEmail(){
        $orders = $this->order->getOrder();
        $customers = $this->order->getCustomer();
        $users = Auth::user();
        $name = $users->name;
        Mail::send('email.test', compact('name', 'orders', 'customers', 'users'), function($email) use($name){
            $email->subject('ELECTRONIC INVOICE: DEAR CUSTOMERS OF HOTALER HOTELS');
            $email->to(Auth::user()->email, $name);
        });
    }
}
