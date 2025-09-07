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
                        <a  href="{{ route('product') }}" class="nav-item nav-link active">Product</a>
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
                        <a href="{{ route('projectgallery') }}" class="nav-item nav-link">Our projects (Gallery)</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Product</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Product</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Our Product</h5>
                    <h1 class="mb-4">Popular  Products</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @forelse($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <!-- Removed blog date, likes, and comments -->
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <a href="#" class="h4">{{ $product->title }}</a>
                                <p class="my-3">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No products found.</p>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Blog End -->

@endsection
