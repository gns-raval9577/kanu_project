@extends('admin.layouts.app')
@section('title','Add Testimonial')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add Testimonial</h1>

@if($errors->any())
  <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
    <ul class="list-disc list-inside">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
  </div>
@endif

<form action="{{ route('admin.testimonials.store') }}" method="POST" class="bg-white p-6 rounded-xl shadow space-y-4">
  @csrf
  <div>
    <label class="block text-sm font-medium">Name *</label>
    <input name="name" value="{{ old('name') }}" class="mt-1 w-full border rounded p-2" required>
  </div>

  <div>
    <label class="block text-sm font-medium">Commite *</label>
    <textarea name="commite" rows="4" class="mt-1 w-full border rounded p-2" required>{{ old('commite') }}</textarea>
  </div>

  <label class="inline-flex items-center space-x-2">
    <input type="checkbox" name="status" value="1" class="rounded" checked>
    <span>Active</span>
  </label>

  <div class="pt-2">
    <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 rounded border">Cancel</a>
    <button class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
  </div>
</form>
@endsection
