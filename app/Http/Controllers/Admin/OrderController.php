<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Order\OrderService;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index() {

        return view('admin.order.customer', [
            'title' => 'Customer list order',
            'customers' => $this->orderService->getCustomerPaginate()
        ]);
    }

    public function show(Customer $customer){
        $carts = $this->orderService->getProductForCart($customer);
  
        // return view('admin.cart.detail', [
        //     'title' => 'Chi Tiết Đơn Hàng : ' .$customer->name,
        //     'customers' => $customer,
        //     'carts' => $carts          
        // ]);
    }
}
