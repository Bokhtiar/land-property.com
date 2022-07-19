<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use League\CommonMark\Node\Query\OrExpr;

class OrderController extends Controller
{
    public function list()
    {
        $orders = Order::all();
        return view('admin.modules.order.index', compact('orders'));
    }

    public function show($id)
    {
        $checkout = Order::find($id);
        return view('admin.modules.order.detail', compact('checkout'));
    }
}
