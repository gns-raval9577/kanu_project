<?php

namespace App\Http\Controllers;

use App\Models\ProjectGallery;
use Illuminate\Http\Request;

class CustomerProjectGalleryController extends Controller
{
    public function index()
    {
        $galleries = ProjectGallery::where('status', 1)->with('images')->latest()->paginate(10);
        return view('customer.gallery', compact('galleries'));
    }

    public function show(ProjectGallery $projectgallery)
    {
        $projectgallery->load('images');
        return view('customer.projectgallery-detail', compact('projectgallery'));
    }
}
