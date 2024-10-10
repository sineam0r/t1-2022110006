@extends('layouts.template')

@section('title', 'Register New Product')

@section('body')

<div class="container p-3 rounded">
    <h1>Register New Product</h1>

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id"
                    placeholder="ID" name="id" required value="{{old('id')}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name"
                    placeholder="Product Name" name="product_name" required value="{{old('product_name')}}">
                </div>
            </div>
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3"
                    placeholder="Description" name="description" required>{{old('description')}}</textarea>
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="retail_price">Retail Price</label>
                    <input type="number" class="form-control" id="retail_price"
                    placeholder="Retail Price" name="retail_price" value="{{old('retail_price')}}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="wholesale_price">Wholesale Price</label>
                    <input type="number" class="form-control" id="wholesale_price"
                    placeholder="Wholesale Price" name="wholesale_price" value="{{old('wholesale_price')}}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="origin">Origin</label>
                    <input type="text" class="form-control" id="origin"
                    placeholder="Origin" name="origin" value="{{old('origin')}}">
                </div>
            </div>
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity"
            placeholder="Quantity" name="quantity" value="{{old('quantity')}}">
        </div>

        <div style="margin-top: 20px;"></div>

        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
        </div>

        <div style="margin-top: 30px;"></div>

        <button type="submit" class="btn btn-primary btn-block">Save</button>
    </form>
</div>
@endsection

