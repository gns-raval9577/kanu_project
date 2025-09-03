@extends('admin.layouts.app')
@section('title','Products')

@section('content')
<div class="flex items-center justify-between mb-6">
  <h1 class="text-2xl font-bold">Products</h1>
  <a href="{{ route('admin.products.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Add Product</a>
</div>

@if(session('success'))
  <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
@endif

<div class="bg-white rounded-xl shadow overflow-x-auto">
  <table class="w-full text-left">
    <thead class="bg-gray-100">
      <tr>
        <th class="p-3">#</th>
        <th class="p-3">Image</th>
        <th class="p-3">Title</th>
        <th class="p-3">Category</th>
        <th class="p-3">Status</th>
        <th class="p-3">Actions</th>
      </tr>
    </thead>
    <tbody>
    @forelse($products as $item)
      <tr class="border-t">
        <td class="p-3">{{ $item->id }}</td>
        <td class="p-3">
          @if($item->image)
            <img src="{{ asset('storage/'.$item->image) }}" alt="" class="h-12 w-12 object-cover rounded">
          @else
            <div class="h-12 w-12 bg-gray-200 rounded"></div>
          @endif
        </td>
        <td class="p-3 font-medium">{{ $item->title }}</td>
        <td class="p-3">{{ $item->category }}</td>
        <td class="p-3">
          <form action="{{ route('admin.products.toggle-status',$item) }}" method="POST">
            @csrf @method('PATCH')
            <button class="px-2 py-1 rounded text-xs {{ $item->status ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
              {{ $item->status ? 'Active' : 'Inactive' }}
            </button>
          </form>
        </td>
        <td class="p-3 space-x-3">
          <a href="{{ route('admin.products.edit',$item) }}" class="text-blue-600">Edit</a>
          <form action="{{ route('admin.products.destroy',$item) }}" method="POST" class="inline"
                onsubmit="return confirm('Delete this product?')">
            @csrf @method('DELETE')
            <button class="text-red-600">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td class="p-3" colspan="6">No products found.</td></tr>
    @endforelse
    </tbody>
  </table>
</div>

<div class="mt-4">{{ $products->links() }}</div>
@endsection
