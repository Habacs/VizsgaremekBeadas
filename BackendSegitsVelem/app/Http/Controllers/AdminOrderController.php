<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        return Order::with(['user', 'product'])->get();
    }

    public function approve($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'approved';
        $order->save();
        return $order;
    }

    public function reject($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'rejected';
        $order->save();
        return $order;
    }
}
