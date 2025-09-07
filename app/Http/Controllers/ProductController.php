<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function product()
    {
        $products = Product::latest()->paginate(10);

        return view('customer.product', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'image.dimensions' => 'The image must be exactly 400 pixels wide and 300 pixels tall.',
        ];

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|min:350|max:370',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:width=400,height=300',
            'status' => 'nullable|boolean',
        ], $messages);

        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/products', 'public');
        }

        Product::create($data);
        return redirect()->route('admin.products.index')->with('success', 'Product created');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $messages = [
            'image.dimensions' => 'The image must be exactly 400 pixels wide and 300 pixels tall.',
        ];

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|min:350|max:370',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:width=400,height=300',
            'status' => 'nullable|boolean',
        ], $messages);

        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('uploads/products', 'public');
        }

        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', 'Product updated');
    }

    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted');
    }

    public function toggleStatus(Product $product)
    {
        $product->update(['status' => ! $product->status]);
        return back()->with('success', 'Status updated');
    }
}
