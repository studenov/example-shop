<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', Order::STATUS_ACTIVE)->get();
        return view('auth.orders.index', compact('orders'));
    }
}
