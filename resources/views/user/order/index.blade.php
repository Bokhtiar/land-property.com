@extends('layouts.user.app')
@section('title', 'Order List')
@section('user_content')

<section class="card my-5 container">
  <div class="card-header">
    <h3>Order Item List</h3>
  </div>
  <div class="card-body">
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">Index</th>
          <th scope="col">User Name</th>
          <th scope="col">User Phone</th>
          <th scope="col">User Email</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($checkouts as $checkout)
          <tr>
              <th scope="row">{{ $loop->index +1 }}</th>
              <td>{{ $checkout->name }}</td>
              <td>{{ $checkout->phone }}</td>
              <td>{{ $checkout->email }}</td>

          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</section>

@endsection
