<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function Order(Request $request)
    {
        $order_id = $request->get('id');
        $orders = Order::find($order_id);
        
        $data = [
            'orders' => $orders,
            'products' => $orders->products
        ];
    
        return view('orders.list', $data);
    }
}
