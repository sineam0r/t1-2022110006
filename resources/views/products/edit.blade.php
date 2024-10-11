@extends('layouts.template')

@section('title', 'Edit Product')

@section('body')

<div class="container p-3 rounded">
    <h1>Edit Product</h1>

    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                    placeholder="ID" name="id" required value="{{old('id', $product->id)}}" readonly>
                    @error('id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name"
                    placeholder="Product Name" name="product_name" required value="{{old('product_name', $product->product_name)}}">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                    placeholder="Description" name="description">{{old('description', $product->description)}}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="retail_price">Retail Price</label>
                    <input type="number" class="form-control @error('retail_price') is-invalid @enderror" id="retail_price"
                    placeholder="Retail Price" name="retail_price" value="{{old('retail_price', $product->retail_price)}}">
                    @error('retail_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="wholesale_price">Wholesale Price</label>
                    <input type="number" class="form-control @error('wholesale_price') is-invalid @enderror" id="wholesale_price"
                    placeholder="Wholesale Price" name="wholesale_price" value="{{old('wholesale_price', $product->wholesale_price)}}">
                    @error('wholesale_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="origin">Origin</label>
                    <input type="text" class="form-control @error('origin') is-invalid @enderror" id="origin"
                    placeholder="Origin" name="origin" value="{{old('origin', $product->origin)}}">
                    @error('origin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
            placeholder="Quantity" name="quantity" value="{{old('quantity', $product->quantity)}}">
            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="col-6 mt-2 mb-2">
            <label class="form-label" for="photo">Photo</label>
            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
            @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="margin-top: 30px;"></div>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
</div>
@endsection

