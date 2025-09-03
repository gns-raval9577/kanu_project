@extends('admin.layouts.app')
@section('title','Gallery')

@section('content')
<div class="flex items-center justify-between mb-6">
  <h1 class="text-2xl font-bold">Gallery</h1>
  <a href="{{ route('admin.galleries.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Add</a>
</div>

@if(session('success'))
  <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
@endif

<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
@forelse($galleries as $item)
  <div class="bg-white rounded-xl shadow p-3">
    <div class="aspect-square bg-gray-100 rounded overflow-hidden mb-2">
      @if($item->image)
        <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover">
      @endif
    </div>
    <div class="font-medium">{{ $item->title }}</div>
    <div class="flex items-center justify-between mt-2">
      <form action="{{ route('admin.galleries.toggle-status',$item) }}" method="POST">
        @csrf @method('PATCH')
        <button class="px-2 py-1 rounded text-xs {{ $item->status ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
          {{ $item->status ? 'Active' : 'Inactive' }}
        </button>
      </form>
      <div class="space-x-3">
        <a href="{{ route('admin.galleries.edit',$item) }}" class="text-blue-600 text-sm">Edit</a>
        <form action="{{ route('admin.galleries.destroy',$item) }}" method="POST" class="inline" onsubmit="return confirm('Delete this image?')">
          @csrf @method('DELETE')
          <button class="text-red-600 text-sm">Delete</button>
        </form>
      </div>
    </div>
  </div>
@empty
  <p>No gallery items.</p>
@endforelse
</div>

<div class="mt-6">{{ $galleries->links() }}</div>
@endsection
