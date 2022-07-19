@extends('layouts.user.app')
@section('title', 'Order Create Page')
@section('user_content')

<div class="text-center mt-5">
    <h4>Cart Item</h4>
</div>
<div class="scrapcar-main-section">
    <div class="container">
<table class="table container text-center" >
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
</div><br>
<br><br><br>
</div>
</div>


    <section>
        <div class="">
            
        </div>
        <div class="card-body">
            
<section class="">
    <style>
       input{
         border: 1px solid;
         border-radius: 20px;
         box-shadow: 3px 5px 5px 5px  #e4dfdf;
       }
       select{
         border: 1px solid;
         border-radius: 20px;
         box-shadow: 3px 5px 5px 5px  #e4dfdf;
       }
       textarea{
         border: 1px solid;
         border-radius: 20px;
         box-shadow: 3px 5px 5px 5px  #e4dfdf;
       }

       .desing{
           -moz-box-shadow:    inset 0 0 5px #000000;
          -webkit-box-shadow: inset 0 0 5px #000000;
          box-shadow:         inset 0 0 5px #000000;
       }

       </style>


       <section class="container my-3">
           <div class="row justify-content-center desing">
               <div class="col-md-7 my-4">
                   <div class="lead">
                   </div>
                   <h2 class="text-center">Checkout Form</h2>
                   <form action="{{ url('user/order/store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                           <div class="form-group">
                               <label for="">Enter Your Name *</label>
                               <input type="text" placeholder="Enter Your Name" name="name" class="form-control"  id="" required>
                           </div>
                           <div class="form-group">
                               <label for="">Enter Your Email *</label>
                               <input type="email" name="email" class="form-control" placeholder="Enter Your Email" id="" required>
                           </div>
                           <div class="form-group">
                               <label for="">Enter Your Phone *</label>
                               <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone" id="" required>
                           </div>

                           <div class="form-group">
                               <label for="">Select Your Payment</label>
                               <select class="form-control" name="payment_name" id="">
                                   <option value="disable">Select Your Payment Method</option>
                                   <option value="islami"> Islami Bank (127129812128182) </option>
                                   <option value="janata"> Janata Bank (20034022323332) </option>
                                   <option value="pubali"> Pubali Bank (9383232323) </option>
                               </select>
                           </div>

                           <div class="form-group">
                               <label for="">Enter Your Payment Number *</label>
                               <input type="number" placeholder="Enter Your Number" name="payment_number" class="form-control" value="" id="" required>
                           </div>

                           <div class="form-group">
                               <label for="">Enter Your Payment Amount</label>
                               <input type="number" placeholder="Enter Your amoun key" name="amount" class="form-control" value="" id="" required>
                           </div>

                           <div class="form-group">
                               <label for="">Enter Your Location *</label>
                               <input type="text" placeholder="Enter Your Location" name="location" class="form-control" value="" id="" required>
                           </div>
                           <div class="form-group">
                               <label for="">Description *</label>
                               <textarea name="description" placeholder="Enter Your Description" class="form-control" id="" cols="10" rows="5"></textarea>
                           </div>
                           <div class="text-center my-3">
                               <input type="submit" class="btn btn-info text-light" name="btn" value="Submit" id="">
                           </div>
                   </form>
               </div>
           </div>
       </section>

   </section>

        </div>
    </section>




@endsection
