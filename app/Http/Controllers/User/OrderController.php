<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order_list()
    {
        $checkouts = Order::where('user_id', Auth::id())->get();
        return view('user.order.index', compact('checkouts'));
    }

    public function create()
    {
        $carts = Cart::where('user_id',Auth::id())->where('order_id', null)->get();
        return view('user.order.create', compact('carts'));
    }

    public function store(Request $request)
    {
        $checkout= new Order();
        $checkout['name'] = $request->name;
        $checkout['email'] = $request->email;
        $checkout['phone'] = $request->phone;
        $checkout['payment_name'] = $request->payment_name;
        $checkout['payment_number'] = $request->payment_number;
        $checkout['amount'] = $request->amount;
        $checkout['location'] = $request->location;
        $checkout['user_id'] = Auth::id();
        $checkout['description'] = $request->description;
        $checkout->save();
        foreach (Cart::item_cart() as $cart) {
                $cart['order_id']=$checkout->id;
                $cart->save();
        }
        return redirect('/')->with('success', 'Order Created Successfully Done...!');
   }
    
}
