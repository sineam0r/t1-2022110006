@extends('layouts.template')

@section('title', 'Product List | T1-2022110006')

@section('body')
<div class="container p-3 rounded">
    <div class="d-flex justify-content-between align-items-center">
        <h1>All Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            Create New Product
        </a>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success mt-1">
        {{ session()->get('success') }}
    </div>
@endif

<div class="container mt-3">
    <table class="table table-bordered mb-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Retail Price</th>
                <th scope="col">Wholesale Price</th>
                <th scope="col">Origin</th>
                <th scope="col">Quantity</th>
                <th scope="col">Product Image</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>
                    <a href="{{ route('products.show', $product) }}">
                        {{ $product->product_name }}
                    </a>
                </td>
                <td>{{ Str::limit($product->description, 50, '...') }}</td>
                <td>{{ number_format($product->retail_price, 2) }}</td>
                <td>{{ number_format($product->wholesale_price, 2) }}</td>
                <td>{{ $product->origin }}</td>
                <td>{{ $product->quantity }}</td>
                <td class="text-center">
                    <img src="{{ $product->photo ? Storage::url($product->photo) : asset('img/no-image.jpg') }}" class="img-thumbnail w-25"
                    alt="Product Image">
                </td>
                <td>{{ $product->created_at->format('Y-m-d H:i') }}</td>
                <td>{{ $product->updated_at->format('Y-m-d H:i') }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm me-2">
                            Edit
                        </a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-5 d-flex justify-content-center">
        {!! $products->links('pagination::bootstrap-4') !!}
    </div>
</div>
@endsection
