<div class=" mt-5">
    <div class="card-footer mx-5">
        <div class="row mb-4 ">
            <div class="col-md-4 col-sm-11 col-xs-11">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <h1 class="font-weight-bold mr-2 px-3" style="color:#16151a; background-color:#957bda"> T
                        </h1>
                        <h1 style="color: #957bda"></h1>
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non
                        pariatur numquam animi nam at impedit odit nisi.</p>
                    <div class="social mt-2 mb-3">
                        <i class="fa fa-facebook-official fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-linkedin-square fa-lg"></i>
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
            <div class="col-md-2 col-sm-6 col-xs-4">
                <h5 class="heading">Services</h5>
                <ul>
                    @foreach ($categories as $cat)
                    <li>{{ $cat->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-4">
                <h5 class="heading">Quick Links</h5>
                <ul class="-footer-text">
                    <li><a href="{{ url('/') }}#about">About Us</a></li>
                    <li><a href="{{ url('/') }}#contact">Contact Us</a></li>
                    <li>Trams Condition</li>
                </ul>
            </div>
        </div>
    </div>

</div>
