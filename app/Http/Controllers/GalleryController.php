<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'status' => 'nullable|boolean',
        ]);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/galleries', 'public');
        }

        Gallery::create($data);
        return redirect()->route('admin.galleries.index')->with('success', 'Image added');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'status' => 'nullable|boolean',
        ]);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $data['image'] = $request->file('image')->store('uploads/galleries', 'public');
        }

        $gallery->update($data);
        return redirect()->route('admin.galleries.index')->with('success', 'Image updated');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Image deleted');
    }

    public function toggleStatus(Gallery $gallery)
    {
        $gallery->update(['status' => ! $gallery->status]);
        return back()->with('success', 'Status updated');
    }
}
