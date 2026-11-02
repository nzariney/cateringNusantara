<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with([
            'customer.city',
            'orderItems.menu.category',
            'courier',
            'paymentMethod',
        ])->paginate(15);

        return view('dashboard', compact('orders'));
    }
}
