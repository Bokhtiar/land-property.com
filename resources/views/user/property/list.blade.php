@extends('layouts.user.app')
@section('title', 'Property List')
@section('css')
@endsection
@section('user_content')

<!--property list show -->
<section>
    <div class="container">
        <div class="text-center">
            <h2 class="mt-4 title">Our Properties</h2>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
        </div>

        <div class="d-flex justify-content-between">
            <h4 href="" class="text-uppercase">Property List</h4>
            <a class="btn btn-bg" href="" class="ml-auto">View All</a>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="{{ asset('i.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--propety list end -->

@section('js')
@endsection
@endsection

