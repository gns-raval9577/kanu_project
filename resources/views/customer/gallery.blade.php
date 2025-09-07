@extends('customer.layouts.app')

@section('title', 'Project Gallery')

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
                {{-- <!-- <!-- <a  href="{{ route('services') }}" class="nav-item nav-link">Services</a> --> --> --}}
                
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
                <a href="{{ route('projectgallery') }}" class="nav-item nav-link active">Projects</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Project Gallery</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">Project Gallery</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="section-title px-3">Our Projects</h5>
            <h1 class="mb-4">Explore Our Latest Projects</h1>
        </div>

        <div class="row g-4">
            @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                    <img src="{{ asset('storage/' . $gallery->main_image) }}" class="img-fluid w-100 h-100 rounded" alt="{{ $gallery->title }}" style="object-fit: cover;">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white">{{ $gallery->title }}</h5>
                            <p class="text-white-50">{{ Str::limit($gallery->description, 100) }}</p>
                            <a href="{{ route('projectgallery.show', $gallery) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if($galleries->hasPages())
        <div class="d-flex justify-content-center mt-5">
            {{ $galleries->links() }}
        </div>
        @endif
    </div>
</div>
<!-- Gallery End -->
@endsection
