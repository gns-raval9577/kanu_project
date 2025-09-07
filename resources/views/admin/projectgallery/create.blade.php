@extends('admin.layouts.app')
@section('title','Add Project Gallery')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
  <h1 class="text-2xl font-bold mb-6">Add Project Gallery</h1>

  <form action="{{ route('admin.projectgallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
      <label for="title" class="block font-medium mb-1">Title</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}" required
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label for="main_image" class="block font-medium mb-1">Main Image</label>
      <input type="file" name="main_image" id="main_image" accept="image/*"
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('main_image') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label for="subimages" class="block font-medium mb-1">Sub Images (3-4 images)</label>
      <input type="file" name="subimages[]" id="subimages" accept="image/*" multiple
             class="w-full border border-gray-300 rounded px-3 py-2">
      @error('subimages.*') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label for="description" class="block font-medium mb-1">Description</label>
      <textarea name="description" id="description" rows="4"
                class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
      @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
      <label class="inline-flex items-center">
        <input type="checkbox" name="status" value="1" {{ old('status', true) ? 'checked' : '' }} class="form-checkbox">
        <span class="ml-2">Active</span>
      </label>
    </div>

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Submit</button>
  </form>
</div>
@endsection
