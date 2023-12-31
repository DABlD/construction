<!doctype html>
<html lang="en">

<head>
    <title>{{ $title }} | PLM Construction Corporation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=K2D:400,700|Niramit:300,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('welcome/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/bootstrap-datepicker.html') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/jquery.timepicker.html') }}">
    <link rel="stylesheet" href="{{ asset('welcome/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/style.css') }}">

    <style>
        .scroller{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand position-absolute" href="{{ asset('/') }}">
                    {{-- <img src="{{ asset('images/test_logo_mini.png') }}" alt="Header Logo"> --}}
                    <img src="{{ asset('images/logo.png') }}" width="50px" height="50px" alt="Header Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-relative" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto pl-lg-5 pl-0 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link scroller active" href="{{ route('/') }}" data-href="home">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="home-slider  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('welcome/img/slider-2.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center text-center">
                    <div class="col-md-7 col-sm-12 element-animate">
                        <h1>Get A Quote</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control form-control-lg" id="fname">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control form-control-lg" id="lname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Say about your company</label>
                                <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message2">More info about project</label>
                                <textarea name="message2" id="message2" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h2 class="text-uppercase heading mb-5 text-left ">Clients Says</h2>
                    <div class="media d-block media-testimonial mb-5 text-left">
                        <img src="{{ asset('welcome/img/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-3">
                        <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
                        <div class="media-body">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="media d-block media-testimonial text-left">
                        <img src="{{ asset('welcome/img/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-3">
                        <p>John Doe, <a href="#">XYZ Inc.</a></p>
                        <div class="media-body">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container cta-overlap">
        <div class="text d-flex">
            <h2 class="h3">Contact Us For Projects or Need a Quotations</h2>
            <div class="ml-auto btn-wrap">
                <a href="get-quote.html" class="btn-cta btn btn-outline-white">Get A Quote</a>
            </div>
        </div>
    </section>
    <footer class="site-footer bg-dark" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                        </script> All rights reserved | PLM Construction Corporation
                    </p>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled footer-link">
                        <li>
                            <span class="mr-3 d-block">Address:</span>
                            <span class="text-white">
                                Empress St. cor. Duchess St., Empress <br>
                                Subdivision, Brgy San Isidro, <br>
                                Antipolo City Rizal, 1870
                            </span>
                        </li>
                        <li>
                            <span class="mr-3 d-block">Phone:</span>
                            <span class="text-white">09970848557 <br> 09270444766 <br> 09693222077</span>
                        </li>
                        <li><span class="mr-3 d-block">E-mail:</span><span class="text-white">plmconstructioncorp@gmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Quick Links</h3>
                    <ul class="list-unstyled footer-link">
                        <li><a href="#" data-href="home" class="scroller">Home</a></li>
                        <li><a href="#" data-href="projects" class="scroller">Projects</a></li>
                        <li><a href="#" data-href="services" class="scroller">Services</a></li>
                        <li><a href="#" data-href="contact" class="scroller">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Social</h3>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg>
    </div>

    <script data-cfasync="false" src="{{ asset('welcome/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('welcome/js/popper.min.js') }}"></script>
    <script src="{{ asset('welcome/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('welcome/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('welcome/js/main.js') }}"></script>
</body>

</html>
