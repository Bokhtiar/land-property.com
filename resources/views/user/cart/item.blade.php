@extends('layouts.user.app')
@section('title', "Cart List")
@section('user_content')


<div class="text-center mt-2">
    <h4>All Cart Item</h4>
</div>
<div class="scrapcar-main-section">
    <div class="container">
<table class="table container" >
<thead>
  <tr>
    <th scope="col">#Sl</th>
    <th scope="col">Property Name</th>
    <th scope="col">Property Price</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    @php
        $total_amount = 0;
    @endphp
    @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$cart->property? $cart->property->title : ""}}</td>
            <td>{{$cart->property? $cart->property->price : ""}}</td>
            <?php
            $total_amount +=$cart->property->price*$cart->quantity;
            ?>
            <td>
                <a class="btn btn-success btn-sm" style="" href="{{url('property/detail', $cart->property_id)}}">Show</a>
                <a class="btn btn-danger btn-sm" style="" href="{{url('user/cart/delete/'.$cart->property_id)}}">Delete</a>
             </td>
        </tr>
    @endforeach

</tbody>
</table>
<div class="float-right">
    <p style="color:white;" class="btn btn-success text-light"><strong>Total Amount</strong>: {{$total_amount}}Tk</p>
    <p class="btn btn-info "><strong><a class="text-light" href="{{url('user/checkout/create')}}">Checkout</a> </strong></p>
</div><br>
<br><br><br>
</div>
</div>


@endsection
