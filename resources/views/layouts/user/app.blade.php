<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Real Estate Agent || @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
    <!--row code css file-->
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="h3 nav-title" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end here -->


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
                                    <div class="row px-4 mb-2">
                                        <div class="col-6 text-center px-0 hotel active">
                                            <div class=" py-1">
                                                <select name="" class="form-control" id="">
                                                    <option value="">Select Location</option>
                                                    <option value="">Dhaka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center px-0 hotel">
                                            <div class="block py-1">
                                                <select name="" class="form-control" id="">
                                                    <option value="">Select Property</option>
                                                    <option value="">Land</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-white row mx-0 mb-2 justify-content-between">
                            <button class="btn btn-secondary px-4">Cancel</button>
                            <button class="btn btn-bg ml-auto"><span class="fa fa-filter"></span> &nbsp;&nbsp;Apply
                                Filter</button>
                        </div>
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

    <!--about us -->
    <section>
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
    <section class="login-block">

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


    <!--footer start -->
    <div class=" mt-5">

        <div class="card-footer mx-5">
            <div class="row mb-4 ">

                <div class="col-md-4 col-sm-11 col-xs-11">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                            <h1 class="font-weight-bold mr-2 px-3" style="color:#16151a; background-color:#957bda"> T
                            </h1>
                            <h1 style="color: #957bda">Devs</h1>
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

                <div class="col-md-2 col-sm-4 col-xs-4">

                    <h5 class="heading">Services</h5>
                    <ul>
                        <li>IT Consulting -</li>
                        <li>Development</li>
                        <li>Cloud</li>
                        <li>DevOps & Support</li>
                    </ul>

                </div>


                <div class="col-md-2 col-sm-4 col-xs-4">

                    <h5 class="heading">Industries</h5>
                    <ul class="-footer-text">
                        <li>Finance</li>
                        <li>Public Sector</li>
                        <li>Smart Office</li>
                        <li>Retail</li>
                    </ul>

                </div>


                <div class="col-md-2 col-sm-4 col-xs-4">

                    <h5 class="heading">Company</h5>
                    <ul class="card-text">
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>Contact</li>
                        <li>Join Us</li>
                    </ul>

                </div>

            </div>


            <div class="divider mb-4">
            </div>


            <div class="row" style="font-size:10px;">

                <div class="col-md-6 col-sm-6 col-xs-6">

                    <div class="pull-left">

                        <p><i class="fa fa-copyright"></i> 2020 thezpdesign</p>

                    </div>

                </div>



                <div class="col-md-6 col-sm-6 col-xs-6">


                    <div class="pull-right mr-4 d-flex policy">

                        <div>Terms of Use</div>
                        <div>Privacy Policy</div>
                        <div>Cookie Policy</div>

                    </div>



                </div>



            </div>
        </div>

    </div>
    <!--footer end -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
