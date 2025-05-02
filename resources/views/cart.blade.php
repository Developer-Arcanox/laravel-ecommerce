@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold">🛒 Your Shopping Cart</h2>

        <div class="row g-4">
            <!-- Cart Items -->
            @foreach ($cartItems as $cartImg)
                <div class="col-lg-8">
                    <div class="card cart-item p-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 text-center">
                                <img src="https://via.placeholder.com/150" class="img-fluid product-img rounded"
                                    alt="Product">
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-semibold">Stylish Sneakers</h5>
                                <p class="text-muted mb-1">Men's Shoes</p>
                                <p class="text-muted small mb-0">Size: 10 | Color: Black</p>
                            </div>
                            <div class="col-md-3 text-end">
                                <div class="d-flex justify-content-end align-items-center mb-2">
                                    <button class="btn btn-outline-secondary btn-sm me-1"><i
                                            class="bi bi-dash"></i></button>
                                    <input type="number" class="form-control qty-input d-inline-block" value="1"
                                        min="1">
                                    <button class="btn btn-outline-secondary btn-sm ms-1"><i
                                            class="bi bi-plus"></i></button>
                                </div>
                                <p class="fw-bold mb-0">$89.99</p>
                                <form action="{{ route('cart.remove') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="productID" value="{{ $cartImg->id }}">
                                    <input type="submit" class="btn btn-sm btn-link text-danger mt-1 bi bi-trash" value="Remove">
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach

            <!-- More cart items can go here -->
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$89.99</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>$5.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tax</span>
                        <span>$7.20</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold mb-4">
                        <span>Total</span>
                        <span>$102.19</span>
                    </div>
                    <button class="btn btn-primary w-100">Proceed to Checkout</button>
                    <a href="index.html" class="btn btn-outline-secondary w-100 mt-2">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
