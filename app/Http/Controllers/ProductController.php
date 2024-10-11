<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12|unique:products,id',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric|min:0',
            'wholesale_price' => 'required|numeric|min:0',
            'origin' => 'required|string|size:2',
            'quantity' => 'required|integer|min:0',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::create($validated);

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filePath = $file->store('public/products');
            $product->update(['product_image' => $filePath]);
        }

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12|unique:products,id,' . $product->id,
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric|min:0',
            'wholesale_price' => 'required|numeric|min:0',
            'origin' => 'required|string|size:2',
            'quantity' => 'required|integer|min:0',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->update($validated);

        if ($request->hasFile('product_image')) {
            if ($product->product_image) {
                Storage::delete($product->product_image);
            }
            $file = $request->file('product_image');
            $filePath = $file->store('public/products');
            $product->update(['product_image' => $filePath]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        if ($product->product_name) {
            Storage::delete('public/' . $product->product_name);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}

