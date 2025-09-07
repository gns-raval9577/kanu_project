<?php

namespace App\Http\Controllers;

use App\Models\ProjectGallery;
use App\Models\ProjectGalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectGalleryController extends Controller
{
    public function index()
    {
        $galleries = ProjectGallery::latest()->paginate(10);
        return view('admin.projectgallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.projectgallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'subimages.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $data['status'] = $request->boolean('status');

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('uploads/projectgallery', 'public');
        }

        $gallery = ProjectGallery::create($data);

        if ($request->hasFile('subimages')) {
            foreach ($request->file('subimages') as $image) {
                $path = $image->store('uploads/projectgallery/subimages', 'public');
                $gallery->images()->create(['image' => $path]);
            }
        }

        return redirect()->route('admin.projectgallery.index')->with('success', 'Project gallery created');
    }

    public function edit(ProjectGallery $projectgallery)
    {
        $projectgallery->load('images');
        return view('admin.projectgallery.edit', compact('projectgallery'));
    }

    public function update(Request $request, ProjectGallery $projectgallery)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'subimages.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $data['status'] = $request->boolean('status');

        if ($request->hasFile('main_image')) {
            if ($projectgallery->main_image && Storage::disk('public')->exists($projectgallery->main_image)) {
                Storage::disk('public')->delete($projectgallery->main_image);
            }
            $data['main_image'] = $request->file('main_image')->store('uploads/projectgallery', 'public');
        }

        $projectgallery->update($data);

        if ($request->hasFile('subimages')) {
            foreach ($request->file('subimages') as $image) {
                $filePath = $image->store('uploads/projectgallery/subimages', 'public');
                $projectgallery->images()->create([
                        'image' => $filePath,
                    ]);
            }
        }

        return redirect()->route('admin.projectgallery.index')->with('success', 'Project gallery updated');
    }

    public function destroy(ProjectGallery $projectgallery)
    {
        if ($projectgallery->main_image && Storage::disk('public')->exists($projectgallery->main_image)) {
            Storage::disk('public')->delete($projectgallery->main_image);
        }

        foreach ($projectgallery->images as $image) {
            if (Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }
        }

        $projectgallery->delete();

        return redirect()->route('admin.projectgallery.index')->with('success', 'Project gallery deleted');
    }

    public function toggleStatus(ProjectGallery $projectgallery)
    {
        $projectgallery->update(['status' => ! $projectgallery->status]);
        return back()->with('success', 'Status updated');
    }

    public function deleteImage(ProjectGalleryImage $image)
    {
        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        return back()->with('success', 'Image deleted');
    }
}
