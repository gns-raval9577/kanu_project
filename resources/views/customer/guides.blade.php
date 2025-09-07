@extends('customer.layouts.app')

@section('title', 'Customer Home')

@section('content')

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link ">About</a>
                        <!-- <a  href="{{ route('services') }}" class="nav-item nav-link">Services</a> -->
                                                
                        <a href="{{ route('testimonial') }}"class="nav-item nav-link">Testimonial</a>
                        <a  href="{{ route('product') }}" class="nav-item nav-link">Product</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('destination') }}" class="dropdown-item">Destination</a>
                                <a href="{{ route('tour') }}" class="dropdown-item">Explore Tour</a>
                                <a href="{{ route('booking') }}" class="dropdown-item">Travel Booking</a>
                                <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                                <a href="{{ route('guides') }}" class="dropdown-item active">Travel Guides</a>
                                <a href="{{ route('testimonial') }}"class="nav-item nav-link">Testimonial</a>
                                <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="{{ route('gallery') }}" class="nav-item nav-link">Our Gallery</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Travel Guides</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Guides</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->
@endsection
