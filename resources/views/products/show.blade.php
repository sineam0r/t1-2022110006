@extends('layouts.template')

@section('title', "Product: $product->product_name")

@section('body')

@if ($product->avatar)
    <img src="{{ $product->avatar }}" class="rounded img-thumbnail mx-auto d-block my-3"/>
@endif

<table class="table table-bordered">
    <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$product->id}}</td>
        </tr>
        <tr>
            <th scope="row">Product Name</th>
            <td>{{$product->product_name}}</td>
        </tr>
        <tr>
            <th scope="row">Description</th>
            <td>{{$product->description}}</td>
        </tr>
        <tr>
            <th scope="row">Retail Price</th>
            <td>{{$product->retail_price}}</td>
        </tr>
        <tr>
            <th scope="row">Wholesale Price</th>
            <td>{{$product->wholesale_price}}</td>
        </tr>
        <tr>
            <th scope="row">Origin</th>
            <td>{{$product->origin}}</td>
        </tr>
        <tr>
            <th scope="row">Quantity</th>
            <td>{{$product->quantity}}</td>
        </tr>
    </tbody>
</table>

<div>
    <small>Created at: {{$product->created_at}}</small>
    @if ($product->updated_at)
        <br><small>Updated at: {{$product->updated_at}}</small>
    @endif
</div>

@endsection
