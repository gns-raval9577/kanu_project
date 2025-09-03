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
                        <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
                        <a href="{{ route('testimonial') }}"class="nav-item nav-link active">Testimonial</a>
                        <a  href="{{ route('product') }}" class="nav-item nav-link">Product</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('destination') }}" class="dropdown-item">Destination</a>
                                <a href="{{ route('tour') }}" class="dropdown-item">Explore Tour</a>
                                <a href="{{ route('booking') }}" class="dropdown-item">Travel Booking</a>
                                <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                                <a href="{{ route('guides') }}" class="dropdown-item">Travel Guides</a>
                                <a href="{{ route('testimonial') }}" class="dropdown-item active">Testimonial</a>
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
                <h3 class="text-white display-3 mb-4">Our Testimonial</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Testimonial</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>

                <div class="testimonial-carousel owl-carousel">
                    @forelse($testimonials as $testimonial)
                        <div class="testimonial-item text-center rounded pb-4">
                            <div class="testimonial-comment bg-light rounded p-4">
                                <p class="text-center mb-5">{{ $testimonial->commite }}</p>
                            </div>

                            <div class="testimonial-img p-1">
                                {{-- Optional: you can add user image if you have --}}
                                <img src="{{ asset('customer/img/usersnew.jpg') }}" class="img-fluid rounded-circle" alt="User Image">
                            </div>

                            <div style="margin-top: -35px;">
                                <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                {{-- Optional: you can add designation or location --}}
                                @if(!empty($testimonial->designation))
                                    <p class="mb-0">{{ $testimonial->designation }}</p>
                                @endif

                                {{-- Star rating (optional if you have rating) --}}
                                <div class="d-flex justify-content-center">
                                    @for($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star text-primary"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">No testimonials found.</p>
                    @endforelse
                </div>
            </div>
        </div>
@endsection
