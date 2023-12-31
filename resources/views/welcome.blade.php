<!doctype html>
<html lang="en">

<head>
    <title>PLM Construction Corporation</title>
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
                            <a class="nav-link scroller active" href="#" data-href="home">Home</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="services.html">Pre-Construction</a>
                                <a class="dropdown-item" href="services.html">General Construction</a>
                                <a class="dropdown-item" href="services.html">House Renovation</a>
                                <a class="dropdown-item" href="services.html">Plumbing</a>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link scroller" href="#" data-href="projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroller" href="#" data-href="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroller" href="#" data-href="contact">Contact</a>
                        </li>
                        <li class="nav-item cta-btn2">
                            <a class="nav-link" href="{{ route('get-quote') }}">
                                <span class="d-inline-block px-4 py-2 border" style="background-color: beige; font-weight: bold;">Quotation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="home-slider owl-carousel" id="home">
        <div class="slider-item" style="background-image: url('{{ asset('welcome/img/bg1.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center text-center">
                    <div class="col-md-7 col-sm-12 element-animate">
                        <h1 class="mb-4" style="text-shadow: 2px 2px black;">
                            <span style="color: #f79a7a;">
                                Your One Stop
                            </span>
                            <br>
                            For All Your Construction Projects
                        </h1>
                        {{-- <p class="mb-0"><a href="#" target="_blank" class="btn btn-primary">Get Started</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('{{ asset('welcome/img/bg2.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center text-center">
                    <div class="col-md-8 col-sm-12 element-animate">
                        {{-- <h1 class="mb-4" style="text-shadow: 2px 2px black; color: #37fdfc;">Complete Construction Services</h1> --}}
                        {{-- <p class="mb-0"><a href="#" target="_blank" class="btn btn-primary">Get Started</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-light" id="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
                    <div class="pr-lg-5" style="text-align: justify;">
                        <h2 class="text-uppercase heading border-bottom mb-4 text-left">Our Approach</h2>
                        <p>Our approach to construction is rooted in a commitment to quality, integrity, and collaboration. We work closely with our clients and employees to create a seamless and transparent process. </p>
                        <p>From initial planning and design to on-site construction and project management, we maintain open lines of communication to ensure that your vision is realized to perfection.</p>
                    </div>
                </div>
                <div class="col-md-6  element-animate">
                    <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section border-t" id="projects">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class="text-uppercase heading border-bottom mb-4">Recent Projects</h2>
                    <p class="mb-3 lead">Explore our portfolio to witness the diversity and caliber of our completed projects. From residential remodels to large-scale commercial constructions, each endeavor showcases our dedication to excellence. We take pride in the lasting impact our work has on communities and the satisfaction it brings to our clients.</p>
                    <p><a href="works.html" class="btn btn-primary">See All Projects</a></p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>House Renovation</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>General Construction Building</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_2.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>Pre-Construction</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_3.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>House Renovation</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_3.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>General Construction Building</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="works-single.html" class="link-thumbnail">
                        <h3>Pre-Construction</h3>
                        <span class="ion-plus icon"></span>
                        <img src="{{ asset('welcome/img/work_thumb_2.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class="text-uppercase heading border-bottom mb-4">Services</h2>
                    <p class="mb-3 lead" style="text-align: justify;">At PLM Construction Corp, we offer a comprehensive range of construction services tailored to meet your specific needs. Whether you're planning a residential, commercial, or industrial project, our expertise spans across design-build, remodeling, concrete work, electrical, lighting, and many more. With a focus on precision, safety, and innovation, we ensure that every project is executed with the highest level of craftsmanship.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <span class="flaticon-blueprint icon"></span>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">Pre-Construction</h3>
                            <p>Offering services like feasibility studies, site analysis, cost estimation, and project planning before the actual construction begins.</p>
                            {{-- <p><a href="#" class="btn btn-outline-primary btn-sm">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <span class="flaticon-building-1 icon"></span>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">House Renovation</h3>
                            <p>Building and renovating houses, office buildings, retail spaces, restaurants, warehouses and custom-designed residences.</p>
                            {{-- <p><a href="#" class="btn btn-outline-primary btn-sm">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
                    <div class="media d-block media-feature text-center">
                        <span class="flaticon-crane icon"></span>
                        <div class="media-body">
                            <h3 class="mt-0 text-black">General Contracting</h3>
                            <p>Overseeing the entire construction project, including coordinating subcontractors, managing schedules, and ensuring the project is completed on time and within budget.</p>
                            {{-- <p><a href="#" class="btn btn-outline-primary btn-sm">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center element-animate">
                <div class="col-md-4">
                    <p><a href="services.html" class="btn btn-primary btn-block">View All Services</a></p>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- NEWS --}}
    {{-- <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center mb-5">
                    <h2 class="text-uppercase heading border-bottom mb-4">Our News</h2>
                    <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-1 owl-carousel">
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 8</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 2</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_3.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 5</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 7</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 1</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_3.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 4</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_1.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 12</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media d-block media-custom text-left">
                            <img src="{{ asset('welcome/img/work_thumb_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                            <div class="media-body">
                                <span class="meta-post">December 2, 2017</span>
                                <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 14</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center mb-5">
                    <h2 class="text-uppercase heading border-bottom mb-4">Testimonials</h2>
                    <p class="mb-0 lead">Don't just take our word for it. Hear what our satisfied clients have to say about their experience with us. Read through our testimonials to gain insights into the quality of our work and the level of satisfaction we consistently deliver.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 element-animate">
                    <div class="media d-block media-testimonial text-center">
                        <img src="{{ asset('welcome/img/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-3">
                        <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
                        <div class="media-body">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 element-animate">
                    <div class="media d-block media-testimonial text-center">
                        <img src="{{ asset('welcome/img/person_3.jpg') }}" alt="Image placeholder" class="img-fluid mb-3">
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
    <section class="container cta-overlap" id="contact">
        <div class="text d-flex">
            <h2 class="h3">Contact Us For Projects or Need a Quotations</h2>
            <div class="ml-auto btn-wrap">
                <a href="{{ route('get-quote') }}" class="btn-cta btn btn-outline-white">Get A Quote</a>
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

    <script>
        $(document).ready(function(){
            // When the button is clicked
            $('.scroller').click(function(e){
                $('html, body').animate({
                    scrollTop: $('#' + e.target.dataset.href).offset().top
                }, 1000);
            });
        });
    </script>
</body>
</html>
