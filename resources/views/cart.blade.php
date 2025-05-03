@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="fw-bold">Shopping Cart</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-header mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h6 class="mb-0 fw-bold">Product</h6>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-0 fw-bold">Price</h6>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6 class="mb-0 fw-bold">Quantity</h6>
                        </div>
                        <div class="col-md-2 text-end">
                            <h6 class="mb-0 fw-bold">Total</h6>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 1 -->
                @foreach ($cartItems as $cartItem)
                    <div class="cart-item">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                                class="product-img" alt="Wireless Headphones">
                                        </div>
                                        <div>
                                            <h6 class="mb-1">{{ $cartItem->product->name }}</h6>
                                            <p class="text-muted small mb-1">{{ $cartItem->product->description }}</p>
                                            <div class="mt-2">
                                                <button class="btn btn-sm btn-link text-danger p-0">
                                                    <i class="bi bi-trash me-1"></i> Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <span class="price-current">${{ $cartItem->product->price }}</span>
                                        <span class="price-original">${{ $cartItem->product->original_price }}</span>
                                        <span class="discount-badge mt-1">Save
                                            ${{ $cartItem->product->price - $cartItem->product->original_price }}</span>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="input-group input-group-sm" style="width: 120px;">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control quantity-input" value="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end">
                                    <span class="fw-bold">$329.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-2"></i> Continue Shopping
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash me-2"></i> Clear Cart
                    </button>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="summary-card">
                    <h5 class="fw-bold mb-4">Order Summary</h5>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (3 items)</span>
                            <span>$1,957.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span class="text-success">Free</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <span>$156.56</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Discount</span>
                            <span class="text-success">-$140.00</span>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="d-flex justify-content-between mb-4">
                        <h6 class="fw-bold">Total</h6>
                        <h6 class="fw-bold">$1,973.56</h6>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold mb-3">Promo Code</h6>
                        <div class="input-group promo-input-group">
                            <input type="text" class="form-control" placeholder="Enter promo code">
                            <button class="btn btn-primary" type="button">Apply</button>
                        </div>
                    </div>

                    <div class="alert alert-success small">
                        <div class="d-flex">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <div>
                                <p class="mb-0 fw-bold">You saved $140.00 on this order</p>
                                <small>Includes member discounts and promotions</small>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('checkout') }}">
                        <button class="btn btn-primary w-100 py-2 mb-3">
                            <i class="bi bi-lock-fill me-2"></i> Proceed to Checkout
                        </button>
                    </a>

                    <div class="text-center">
                        <p class="small text-muted mb-0">or checkout with</p>
                        <div class="d-flex justify-content-center mt-2">
                            <button class="btn btn-outline-secondary btn-sm me-2">
                                <i class="bi bi-paypal"></i>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm me-2">
                                <i class="bi bi-google"></i>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-apple"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mt-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="bi bi-shield-check fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Secure Checkout</h6>
                                <p class="text-muted small mb-0">All transactions are secure and encrypted</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
