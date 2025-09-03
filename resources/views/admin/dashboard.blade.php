@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
  <h1 class="text-2xl font-semibold mb-6">📊 Dashboard</h1>

  <!-- Top Stats -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-500">Total Products</h2>
      <p class="text-2xl font-bold text-purple-600">{{ $products->count() }}</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-500">Testimonials</h2>
      <p class="text-2xl font-bold text-purple-600">{{ $testimonials->count() }}</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-500">Gallery Items</h2>
      <p class="text-2xl font-bold text-purple-600">{{ $galleries->count() }}</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-500">Users</h2>
      <p class="text-2xl font-bold text-purple-600">{{ $users->count() ?? 0 }}</p>
    </div>
  </div>

  <!-- Charts -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-700 mb-4">Product Growth</h2>
      <canvas id="productsChart"></canvas>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="text-gray-700 mb-4">Testimonials Overview</h2>
      <canvas id="testimonialChart"></canvas>
    </div>
  </div>
@endsection
