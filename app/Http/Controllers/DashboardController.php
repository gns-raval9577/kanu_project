<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(3)->get();   // latest 3 products
        $testimonials = Testimonial::latest()->take(2)->get(); // latest 2 testimonials
        $galleries = Gallery::latest()->take(8)->get();  // latest 8 gallery images
        $users = User::latest()->take(8)->get();

        return view('admin.dashboard', compact('products', 'testimonials', 'galleries','users'));
    }
}
