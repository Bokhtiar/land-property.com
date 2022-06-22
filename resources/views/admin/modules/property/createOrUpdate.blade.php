@extends('layouts.admin.app')
@section('title',  @$edit ? 'Property Update' : 'Property Create' )

@section('css')
    <style>
        .zoom:hover {
            transform: scale(2.5);
        }
    </style>
@endsection

@section('admin_content')

    <div class="pagetitle">
        <h1>Property {{ @$edit ? 'Update' : 'Create' }} Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="@route('admin.dashboard')">Home</a></li>
                <li class="breadcrumb-item">Property</li>
                <li class="breadcrumb-item active">Property {{ @$edit ? 'Update' : 'Create' }} Form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card">
        <div class="card-header">
            {{-- form validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            {{-- form validation errors end --}}
        </div>
        <div class="card-body">
            <h5 class="card-title">Property {{ @$edit ? 'Update' : 'Create' }} Form <a href="@route('admin.property.index')" class="btn btn-sm btn-success"><i class="ri-list-unordered"></i></a></h5>
            @if (@$edit)
                <form action="@route('admin.property.update', @$edit->property_id)" method="POST" enctype="multipart/form-data">
                    @method('put')
                @else
                    <form action="@route('admin.property.store')" method="post" enctype="multipart/form-data">
            @endif
            @csrf
            <section class="form-group row">
                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Property Title <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="title" value="{{ @$edit->title }}"
                        placeholder="type here Property Title">
                </div>

                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Property Image <span class="text-danger">*</span></label>
                    <input  type="file" name="image" multiple class="form-control">
                    @isset($edit)
                    <div class="my-2">
                        <label for="">Already Image Seleted</label>
                        <img src="{{ asset($edit->image) }}" height="40px" width="40px" alt="">
                    </div>
                    @endisset
                </div>

                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Select Category <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-control" id="">
                       <option value="">Select Category</option>
                       @foreach ($categories as $cat)
                        <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                       @endforeach
                    </select>
                </div>

                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Property Price <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="price" value="{{ @$edit->price }}"
                    placeholder="type here Property Price">
                </div>

                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Contact Number <span class="text-danger">*</span></label>
                    <input required type="number" class="form-control" name="phone" value="{{ @$edit->phone }}"
                        placeholder="type here Property Phone">
                </div>

                <div class="col-md-6 col-lg-6 my-2">
                    <label for="" class="form-label">Property Location <span class="text-danger">*</span></label>
                    <input required type="text" class="form-control" name="location" value="{{ @$edit->location }}"
                        placeholder="type here Property Location">
                </div>
                <div class="col-md-12 col-lg-12">
                    <label for="">Property Body <span class="text-danger">*</span></label>
                    <textarea name="body" class="tinymce-editor">
                       {!! @$edit->body !!}
                      </textarea><!-- End TinyMCE Editor -->
                </div>
            </section>
            <br><br><br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>


@section('js')
@endsection
@endsection

