@extends('admin.layouts.app')

@section('title', 'Edit Gallery')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Edit Gallery</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        value="{{ old('title', $gallery->title) }}" 
                        required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Current Image -->
                @if($gallery->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label><br>
                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery Image" width="150" class="img-thumbnail">
                    </div>
                @endif

                <!-- Upload New Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Change Image</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1" {{ $gallery->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$gallery->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
