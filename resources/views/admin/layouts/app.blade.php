<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    {{-- <aside class="w-64 bg-white shadow-md min-h-screen">

        <div class="p-4 text-xl font-bold text-purple-700">My Admin</div>
        <nav class="mt-4">
            <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-200">Dashboard</a>
            <a href="{{ route('admin.products.index') }}" class="block py-2 px-4 hover:bg-gray-200">Products</a>
            <a href="{{ route('admin.testimonials.index') }}" class="block py-2 px-4 hover:bg-gray-200">Testimonials</a>
            <a href="{{ route('admin.galleries.index') }}" class="block py-2 px-4 hover:bg-gray-200">Gallery</a>
        </nav>
    </aside> --}}

    <aside class="w-64 bg-white shadow-md min-h-screen">
    {{-- <div class="p-4 text-xl font-bold text-purple-700">My Admin</div> --}}
    <div class="p-6 flex items-center space-x-3 border-b border-gray-200">
        <img src="{{ asset('customer/img/usersnew.jpg') }}" alt="Admin Logo" class="h-10 w-10 object-contain">
        <span class="text-2xl font-bold text-purple-700">My Admin</span>
    </div>
    <nav class="mt-4">
        <a href="{{ route('dashboard') }}" 
           class="block py-2 px-4 rounded hover:bg-gray-200 {{ request()->routeIs('dashboard') ? 'bg-purple-100 font-semibold text-purple-700' : '' }}">
           Dashboard
        </a>

        <a href="{{ route('admin.products.index') }}" 
           class="block py-2 px-4 rounded hover:bg-gray-200 {{ request()->routeIs('admin.products.*') ? 'bg-purple-100 font-semibold text-purple-700' : '' }}">
           Products
        </a>

        <a href="{{ route('admin.testimonials.index') }}" 
           class="block py-2 px-4 rounded hover:bg-gray-200 {{ request()->routeIs('admin.testimonials.*') ? 'bg-purple-100 font-semibold text-purple-700' : '' }}">
           Testimonials
        </a>

        <a href="{{ route('admin.galleries.index') }}" 
           class="block py-2 px-4 rounded hover:bg-gray-200 {{ request()->routeIs('admin.galleries.*') ? 'bg-purple-100 font-semibold text-purple-700' : '' }}">
           Gallery
        </a>
    </nav>
</aside>


    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        
        <!-- Top Navbar -->
        <header class="flex justify-between items-center bg-white shadow px-6 py-4">
            <h1 class="text-xl font-semibold">@yield('title')</h1>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                    class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Logout
                </button>
            </form>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
