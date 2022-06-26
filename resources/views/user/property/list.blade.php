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
            <div class="col-md-3 col-lg-3 col-12 col-sm-12">
                <ul class="list-group">
                    @foreach ($divisions as $div)
                    <li class="list-group-item"><a href="@route('property.division', $div->name)">{{ $div->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 col-lg-9 col-12 col-sm-12">
                <div class="row">
                    @foreach ($properties as $item)
                    <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-4">
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" height="200px" src="{{ asset($item->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('property/detail', $item->property_id) }}">{{ $item->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



    </div>
</section>
<!--propety list end -->

@section('js')
@endsection
@endsection

