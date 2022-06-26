@extends('layouts.admin.app')

@section('admin_content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="@route('admin.dashboard')">Home</a></li>
        <li class="breadcrumb-item active">Admin Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section>
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h3>{{ $admin->name }} Profile</h3>
                  </div>
                  <div class="card-body">
                    <p> <strong>Name : </strong>  {{ $admin->name }}</p>
                    <p> <strong>E-mail : </strong>  {{ $admin->email }}</p>
                    <p> <strong>Role  : </strong> Admin</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection
