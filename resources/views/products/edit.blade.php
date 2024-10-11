@extends('layouts.template')

@section('title', 'Update Product')

@section('body')

<div class="container p-3 rounded">
    <h1>Update Existing Product</h1>

    <div class="row">
        <div class="col-12 px-5">
            @if ($errors->any())
            <div class="alert alert-danger mt-4" >
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id"
                            placeholder="ID" name="id" required value="{{ $product->id }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name"
                            placeholder="Product Name" name="product_name" required value="{{ $product->product_name }}">
                        </div>
                    </div>
                </div>

                <div style="margin-top: 20px;"></div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3"
                    placeholder="Description" name="description">{{ $product->description }}</textarea>
                </div>

                <div style="margin-top: 20px;"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="retail_price" class="form-label">Retail Price</label>
                            <input type="number" class="form-control" id="retail_price"
                            placeholder="Retail Price" name="retail_price" value="{{ $product->retail_price }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="wholesale_price" class="form-label">Wholesale Price</label>
                            <input type="number" class="form-control" id="wholesale_price"
                            placeholder="Wholesale Price" name="wholesale_price" value="{{ $product->wholesale_price }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="origin" class="form-label">Origin</label>
                            <input type="text" class="form-control" id="origin"
                            placeholder="Origin" name="origin" value="{{ $product->origin }}">
                        </div>
                    </div>
                </div>

                <div style="margin-top: 20px;"></div>

                <div class="form-group">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="quantity"
                    placeholder="Quantity" name="quantity" value="{{ $product->quantity }}">
                </div>

                <div style="margin-top: 20px;"></div>

                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="product_image">Product Image</label>
                    <input class="form-control @error('product_image') is-invalid @enderror" type="file" name="product_image" id="product_image" accept="image/*">
                    <img src="{{ Storage::url($product->product_image) }}" alt="" width="100">
                    @error('product_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div style="margin-top: 20px;"></div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection

