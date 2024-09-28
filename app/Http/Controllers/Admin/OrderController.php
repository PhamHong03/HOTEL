<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Order\OrderService;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    // construction for order service
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    //list customers 
    public function index() {

        return view('admin.order.customer', [
            'title' => 'Customer list order',
            'customers' => $this->orderService->getCustomerPaginate()
        ]);
    }

    //show order of customer
    public function show(Customer $customer){
        $orders = $this->orderService->getProductForOrder($customer); // get room from order of customer
  
        // dd($orders);
        return view('admin.order.detail', [
            'title' => 'Order details for : ' .$customer->name,
            'customers' => $customer,
            'orders' => $orders          
        ]);
    }

    //edit and update order of customer
    public function editOrder(Customer $customer){
        $orders = $this->orderService->getProductForOrder($customer);
  
        return view('admin.order.edit', [
            'title' => 'Order details for : ' .$customer->name,
            'customers' => $customer,
            'orders' => $orders          
        ]);
    }

    public function update(Request $request, Customer $customer){
        $result = $this->orderService->update2($request, $customer);
      
        if($result) {
            return redirect('/admin/customers');
        }
        return redirect()->back();
    }

    // ORDER 

    public function index_order() {
        $orders = $this->orderService->getOrder();

        return view('admin.order.list', [
            'title' => 'List order of hotels',
            'orders' => $orders
        ]) ;
    }
}
