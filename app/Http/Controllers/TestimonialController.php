<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function customerindex()
    {
        
        $testimonials = Testimonial::where('status', 1)->latest()->paginate(10);
        return view('customer.testimonial', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'commite' => 'required|string|min:50|max:300',
            'status'  => 'nullable|boolean',
        ]);

        $data = $request->only('name', 'commite');
        $data['status'] = $request->boolean('status');

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'commite' => 'required|string|min:50|max:300',
            'status'  => 'nullable|boolean',
        ]);

        // Prepare data
        $data = $request->only('name', 'commite');
        $data['status'] = $request->boolean('status');

        // Update testimonial
        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
                        ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
            Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }

    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update(['status' => ! $testimonial->status]);
        return back()->with('success', 'Status updated successfully.');
    }
}
