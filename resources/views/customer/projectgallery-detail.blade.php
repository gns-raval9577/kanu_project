@extends('customer.layouts.app')

@section('title', $projectgallery->title . ' - Project Gallery')

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
                <a href="{{ route('projectgallery') }}" class="nav-item nav-link active">Our projects (Gallery)</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">{{ $projectgallery->title }}</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('projectgallery') }}">Project Gallery</a></li>
            <li class="breadcrumb-item active text-white">{{ $projectgallery->title }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Project Details Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Main Image -->
            <div class="col-lg-8">
                <div class="project-main-image">
                    <img src="{{ asset('storage/' . $projectgallery->main_image) }}" class="img-fluid w-100 rounded" alt="{{ $projectgallery->title }}" style="height: 400px; object-fit: cover;">
                </div>
            </div>

            <!-- Project Info -->
            <div class="col-lg-4">
                <div class="project-info">
                    <h2 class="mb-4">{{ $projectgallery->title }}</h2>
                    @if($projectgallery->description)
                    <p class="mb-4">{{ $projectgallery->description }}</p>
                    @endif
                    <div class="project-meta">
                        <p><strong>Status:</strong> {{ $projectgallery->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created:</strong> {{ $projectgallery->created_at->format('M d, Y') }}</p>
                        <p><strong>Images:</strong> {{ $projectgallery->images->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub Images Gallery -->
        @if($projectgallery->images->count() > 0)
        <div class="row g-4 mt-4">
            <div class="col-12">
                <h3 class="mb-4">Project Images</h3>
                <div class="row g-3">
                    @foreach($projectgallery->images as $image)
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-item">
                            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid w-100 rounded" alt="Project Image" style="height: 200px; object-fit: cover;">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Back Button -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('projectgallery') }}" class="btn btn-primary px-4 py-2">
                    <i class="fa fa-arrow-left me-2"></i>Back to Gallery
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Project Details End -->
@endsection
