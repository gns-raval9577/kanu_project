@extends('admin.layouts.app')
@section('title','Testimonials')

@section('content')
<div class="flex items-center justify-between mb-6">
  <h1 class="text-2xl font-bold">Testimonials</h1>
  <a href="{{ route('admin.testimonials.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Add</a>
</div>

@if(session('success'))
  <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
@endif

<div class="bg-white rounded-xl shadow overflow-x-auto">
  <table class="w-full text-left">
  <thead class="bg-gradient-to-r from-indigo-600 to-blue-500 shadow-md">
    <tr>
      <th class="p-3 text-left text-white uppercase tracking-wider font-semibold">#</th>
      <th class="p-3 text-left text-white uppercase tracking-wider font-semibold">Name</th>
      <th class="p-3 text-left text-white uppercase tracking-wider font-semibold">Commite</th>
      <th class="p-3 text-left text-white uppercase tracking-wider font-semibold">Status</th>
      <th class="p-3 text-left text-white uppercase tracking-wider font-semibold">Actions</th>
    </tr>
  </thead>

    <tbody>
    @forelse($testimonials as $item)
      <tr class="border-t">
        <td class="p-3">{{ $loop->iteration + ($testimonials->currentPage() - 1) * $testimonials->perPage() }}</td>
        <td class="p-3 font-medium">{{ $item->name }}</td>
        <td class="p-3">{{ Str::limit($item->commite, 50) }}</td>
        <td class="p-3">
          <form action="{{ route('admin.testimonials.toggle-status',$item) }}" method="POST">
            @csrf @method('PATCH')
            <button class="px-2 py-1 rounded text-xs {{ $item->status ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
              {{ $item->status ? 'Active' : 'Inactive' }}
            </button>
          </form>
        </td>
        <!-- <td class="p-3 space-x-3">
          <a href="{{ route('admin.testimonials.edit',$item) }}" class="text-blue-600">Edit</a>
          <form action="{{ route('admin.testimonials.destroy',$item) }}" method="POST" class="inline" onsubmit="return confirm('Delete this item?')">
            @csrf @method('DELETE')
            <button class="text-red-600">Delete</button>
          </form>
        </td> -->
        <td class="p-3 flex space-x-2">
    <a href="{{ route('admin.testimonials.edit', $item) }}" 
       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm">
       Edit
    </a>

    <form action="{{ route('admin.testimonials.destroy', $item) }}" method="POST" 
          onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm">
            Delete
        </button>
    </form>
</td>

      </tr>
    @empty
      <tr><td class="p-3" colspan="5">No testimonials.</td></tr>
    @endforelse
    </tbody>
  </table>
</div>

<div class="mt-4">{{ $testimonials->links() }}</div>
@endsection
