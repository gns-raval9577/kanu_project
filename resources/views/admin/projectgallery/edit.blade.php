@extends('admin.layouts.app')
@section('title','Edit Project Gallery')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
  <h1 class="text-2xl font-bold mb-6">Edit Project Gallery</h1>

  <form action="{{ route('admin.projectgallery.update', $projectgallery) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-4">
      <label for="title" class="block font-medium mb-1">Title</label>
      <input type="text" name="title" id="title" value="{{ old('title', $projectgallery->title) }}" required
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label for="main_image" class="block font-medium mb-1">Main Image</label>
      @if($projectgallery->main_image)
        <img src="{{ asset('storage/' . $projectgallery->main_image) }}" alt="Current Main Image" class="h-20 w-20 object-cover rounded mb-2">
      @endif
      <input type="file" name="main_image" id="main_image" accept="image/*"
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('main_image') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label class="block font-medium mb-1">Current Sub Images</label>
      <div class="flex flex-wrap gap-2 mb-2">
        @foreach($projectgallery->images as $image)
          <div class="relative">
            <img src="{{ asset('storage/' . $image->image) }}" alt="Sub Image" class="h-20 w-20 object-cover rounded">
            <form action="{{ route('admin.projectgallery.image.delete', $image) }}" method="POST" class="absolute top-0 right-0">
              @csrf @method('DELETE')
              <button type="submit" class="bg-red-600 text-white rounded-full p-1 text-xs">X</button>
            </form>
          </div>
        @endforeach
      </div>
      <label for="subimages" class="block font-medium mb-1">Add More Sub Images</label>
      <input type="file" name="subimages[]" id="subimages" accept="image/*" multiple
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('subimages.*') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label for="description" class="block font-medium mb-1">Description</label>
      <textarea name="description" id="description" rows="4"
                class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description', $projectgallery->description) }}</textarea>
      @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label class="inline-flex items-center">
        <input type="checkbox" name="status" value="1" {{ old('status', $projectgallery->status) ? 'checked' : '' }} class="form-checkbox">
        <span class="ml-2">Active</span>
      </label>
    </div>

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Update</button>
  </form>
</div>
@endsection
