<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::where('status', 1)->get();
        return view('customer.home', compact('testimonials'));
    }
}
