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
                        <a  href="{{ route('services') }}" class="nav-item nav-link active">Services</a>
                                                <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
                        <a href="{{ route('testimonial') }}"class="nav-item nav-link">Testimonial</a>
                        <a  href="{{ route('product') }}" class="nav-item nav-link">Product</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('destination') }}" class="dropdown-item">Destination</a>
                                <a href="{{ route('tour') }}" class="dropdown-item">Explore Tour</a>
                                <a href="{{ route('booking') }}" class="dropdown-item">Travel Booking</a>
                                <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                                <a href="{{ route('guides') }}" class="dropdown-item">Travel Guides</a>
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
                <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Services</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Searvices</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">WorldWide Tours</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Hotel Reservation</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Travel Guides</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Event Management</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">WorldWide Tours</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Hotel Reservation</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Travel Guides</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Event Management</h5>
                                        <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

@endsection
