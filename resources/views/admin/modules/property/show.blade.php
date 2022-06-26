@extends('layouts.admin.app')
@section('title', 'Property Details')
@section('css')
@endsection

@section('admin_content')

    <div class="pagetitle">
        <h1>Property Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="@route('admin.dashboard')">Home</a></li>
                <li class="breadcrumb-item">Property Show</li>
                <li class="breadcrumb-item active">Property Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Property Title :</span> {{ $show->title }}
        </div>
        <div class="card-body">
            <div class="row my-3">
                <div class="col-sm-12 col-md-5 col-lg-5 text-center">
                    <img src="{{ asset($show->image) }}" height="auto" width="100%" alt="">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <label class="" for="">Category :</label>
                    {{ $show->category ? $show->category->name: '' }}
                    <br>
                    <label class="" for="">Divisions :</label>
                    {{ $show->division_name }}
                    <br>
                    <label for="">Location :</label>
                    {{ $show->location }}
                    <br>
                    <label for="">Contact Us :</label>
                    {{ $show->phone }}
                    <br>
                    <label for="">Price :</label>
                    {{ $show->price }} Tk
                    <br>
                    <label for="">Description :</label>
                    {!! $show->body !!}
                </div>
            </div>
        </div>
    </div>

@section('js')
@endsection

@endsection
