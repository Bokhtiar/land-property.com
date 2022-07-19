<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store($id){
        if(Cart::where('property_id',$id)->where('order_id',null)->where('user_id',Auth::id())->first()){
            $update = Cart::where('property_id',$id)->where('order_id',null)->first();
            $update['quantity']=$update->quantity+1;
            $update->save();
            return back();
        }else{
            Cart::create([
                'user_id'=> Auth::id(),
                'property_id'=> $id,
            ]);
            $property = Property::find($id);
            $property->sell = 0;
            $property->save();
            return redirect('/')->with('success', 'Add To Cart Added Successfully...!');
        }
    }

    public function cart_item(){
        $id = Auth::id();
        $carts = Cart::where('user_id',$id)->where('order_id', null)->get();
        return view('user.cart.item',compact('carts'));
    }


    public function update(Request $request, $id){
        $quantity = cart::find($id);
        $quantity['quantity']=$request->quantity;
        $quantity->save();
        return back();
    }

    public function delete($id){
        Cart::find($id)->delete();
        return back();
    }
}
