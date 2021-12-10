<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->where('status', Order::STATUS_ACTIVE)->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if (!Auth::user()->orders->contains($order)) {
            return back();
        }

        return view('auth.orders.show', compact('order'));
    }
}
