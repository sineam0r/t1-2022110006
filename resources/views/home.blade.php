@extends('layouts.template')

@section('title', 'Home | T1-2022110006')

@section('body')
<div class="container mt-4">
    <h1 class="mt-4">T1-2022110006 CRUD Products | Dashboard</h1>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Product</h5>
                    <p class="card-text">@php
                        $totalQty = \App\Models\Product::sum('quantity');
                    @endphp
                        {{ $totalQty }}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Product Termahal</h5>
                    <p class="card-text">@php
                        $topRetail = \App\Models\Product::orderBy('retail_price', 'desc')->first();
                    @endphp
                        @if($topRetail)
                            Rp {{ number_format($topRetail->retail_price, 2) }}
                            <br>
                            {{ $topRetail->product_name }}
                        @else
                            Belum ada produk.
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Product Terbanyak</h5>
                    <p class="card-text">@php
                        $productQty = \App\Models\Product::orderBy('quantity', 'desc')->first();
                    @endphp
                        @if($productQty)
                            {{ $productQty->product_name }}
                            <br>
                            Quantity: {{ $productQty->quantity }}
                        @else
                            Belum ada produk.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

