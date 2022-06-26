@extends('layouts.user.app')
@section('title', 'HOME')
@section('css')
@endsection
@section('user_content')

 <!--banner section  start-->
 <section class="banner-section-wrapper">
    <div class="container-fluid px-1 px-sm-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-8">
                <div class="card border-0">
                    <div class="card-header bg-white">
                        <h4 class="mb-1"> Search and Filter</h4>
                        <small class="text-muted">Create segments for filtering your data for seeing business
                            insights.</small>
                    </div>
                    <div class="card-body px-3 px-md-5">
                        <h5>FILTER LIST</h5>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6><span class="fa fa-star icon-star mr-3"></span>Locaton && Property</h6>
                            </div>
                            <div class="card-body">
                                <form action="@route('property.search')" method="post">
                                    @csrf
                                    <div class="row px-4 mb-2">
                                        <div class="col-6 text-center px-0 hotel active">
                                            <div class=" py-1">
                                                <select name="division_name" class="form-control" id="">
                                                    <option value="">Select Location</option>
                                                    @foreach ($divisions as $div)
                                                    <option value="{{ $div->name }}">{{ $div->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center px-0 hotel">
                                            <div class="block py-1">
                                                <select name="category_id" class="form-control" id="">
                                                    <option value="">Select Property</option>
                                                    @foreach ($categories as $cat)
                                                    <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-footer bg-white row mx-0 mb-2 justify-content-between">
                        <button class="btn btn-secondary px-4">Cancel</button>
                        <button type="submit" class="btn btn-bg ml-auto"><span class="fa fa-filter"></span> &nbsp;&nbsp;Apply
                            Filter</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner section end -->

<!--property list show -->
<section>
    <div class="container">
        <div class="text-center">
            <h2 class="mt-4 title">Our Properties</h2>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
        </div>

        <div class="d-flex justify-content-between">
            <h4 href="" class="text-uppercase">Property List</h4>
            <a class="btn btn-bg" href="@route('property.list')" class="ml-auto">View All</a>
        </div>

        <div class="row">
            @foreach ($properties as $property)
            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" height="300px" src="{{ asset($property->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('property/detail', $property->property_id) }}">{{ $property->title }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!--propety list end -->

<!--about us -->
<section id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="mt-4 title">About Us</h2>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
        </div>


        <div class="row justify-content-center my-5">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-md-4">
                        <img src="{{ asset('i.jpg') }}" height="300px" width="100%" alt="">
                    </div>

                    <div class="col-md-12 col-lg-8 col-md-8">
                        <p class="mt-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us end-->

<!--contact form -->
<section id="contact" class="login-block">

    <div class="container">
        <div class="text-center">
            <h2 class="mt-4 title">Contact-Us</h2>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
        </div>
        <div class="row">
            <div class="col-md-4 text-center mt-5">
                <h4 class="text-center title">Address</h4>
                <p>
                    <span>Ashulia Dhaka Bangladesh</span>
                </p>

                <h4 class="text-center title">Info</h4>
                <p>
                    <span>039938232323</span> <br>
                    <span>alsdfaio@gmaif.com</span>
                </p>

            </div>
            <div class="col-sm-8">
                <form class="md-float-material form-material">
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center"><i class="fa fa-phone-square text-primary f-56"></i>
                                    </h3>
                                    <h3 class="text-center contact-us">Contact Us</h3>
                                    <h6 class="text-center respond">(we generally respond in 24 hours)</h6>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control text-left"
                                            placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control text-left"
                                            placeholder="Email" required="">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control text-left"
                                    placeholder="Message" required="">

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i
                                            class="fa fa-phone"></i> Contact Now </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

</section>
<!--contact form end -->

@section('js')
@endsection
@endsection

