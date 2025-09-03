@extends('admin.layouts.app')

@section('title','Edit Testimonial')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Testimonial</h1>

@if($errors->any())
  <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
    <ul class="list-disc list-inside">
      @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow space-y-4">
  @csrf
  @method('PUT')

  <div>
    <label class="block text-sm font-medium">Name *</label>
    <input name="name" value="{{ old('name', $testimonial->name) }}" class="mt-1 w-full border rounded p-2" required>
  </div>

  <div>
    <label class="block text-sm font-medium">Commite *</label>
    <textarea name="commite" rows="4" class="mt-1 w-full border rounded p-2" required>{{ old('commite', $testimonial->commite) }}</textarea>
  </div>

  <!-- Current Image -->
  @if($testimonial->image)
    <div>
      <label class="block text-sm font-medium">Current Image</label>
      <img src="{{ asset('storage/'.$testimonial->image) }}" alt="Testimonial Image" class="mt-2 rounded shadow" style="max-width:150px;">
    </div>
  @endif
  <div class="flex items-center space-x-2">
    <input type="checkbox" name="status" value="1" class="rounded" {{ $testimonial->status ? 'checked' : '' }}>
    <span>Active</span>
  </div>

  <div class="pt-2 flex space-x-2">
    <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 rounded border">Cancel</a>
    <button class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
  </div>
</form>
@endsection
