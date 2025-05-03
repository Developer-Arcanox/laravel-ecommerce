@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="fw-bold">Checkout</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- Checkout Progress -->
                <div class="checkout-card mb-4">
                    <div class="checkout-header">
                        <h5 class="mb-0 fw-bold">Checkout Progress</h5>
                    </div>
                    <div class="card-body">
                        <div class="checkout-step active">
                            <div class="checkout-step-number">1</div>
                            <div>
                                <h6 class="fw-bold mb-1">Shipping Information</h6>
                                <p class="text-muted small mb-0">Enter your shipping details</p>
                            </div>
                        </div>
                        <div class="checkout-step">
                            <div class="checkout-step-number">2</div>
                            <div>
                                <h6 class="fw-bold mb-1">Payment Method</h6>
                                <p class="text-muted small mb-0">Select how you want to pay</p>
                            </div>
                        </div>
                        <div class="checkout-step">
                            <div class="checkout-step-number">3</div>
                            <div>
                                <h6 class="fw-bold mb-1">Review Order</h6>
                                <p class="text-muted small mb-0">Verify your order details</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="checkout-card mb-4">
                    <div class="checkout-header">
                        <h5 class="mb-0 fw-bold">Shipping Information</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('checkout.submit') }}" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Street Address</label>
                                <input type="text" class="form-control" name="street" id="address" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" name="country" id="country" required>
                                        <option value="">Select Country</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="AU">Australia</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label">State/Province</label>
                                    <select class="form-select" name="state" id="state" required>
                                        <option value="">Select State</option>
                                        <option value="CA">California</option>
                                        <option value="NY">New York</option>
                                        <option value="TX">Texas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zipCode" class="form-label">ZIP/Postal Code</label>
                                    <input type="text" class="form-control" name="zipCode" id="zipCode" required>
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="saveAddress">
                                <label class="form-check-label" for="saveAddress">
                                    Save this address for future use
                                </label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    <i class="bi bi-arrow-left me-2"></i> Back to Cart
                                </button>
                                <button class="btn btn-primary">
                                    @csrf
                                    <input type="submit" class="bi bi-arrow-right ms-2" value="Continue to Payment">

                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Saved Addresses (Hidden by default) -->
                <div class="checkout-card mb-4 d-none">
                    <div class="checkout-header">
                        <h5 class="mb-0 fw-bold">Saved Addresses</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card border-primary h-100">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="savedAddress"
                                                id="address1" checked>
                                            <label class="form-check-label fw-bold" for="address1">
                                                Home Address
                                            </label>
                                        </div>
                                        <p class="mb-1 mt-2">John Smith</p>
                                        <p class="mb-1">123 Main Street, Apt 4B</p>
                                        <p class="mb-1">Brooklyn, NY 11201</p>
                                        <p class="mb-1">United States</p>
                                        <p class="mb-0">Phone: (555) 123-4567</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="savedAddress"
                                                id="address2">
                                            <label class="form-check-label fw-bold" for="address2">
                                                Work Address
                                            </label>
                                        </div>
                                        <p class="mb-1 mt-2">John Smith</p>
                                        <p class="mb-1">456 Business Ave, Suite 1200</p>
                                        <p class="mb-1">New York, NY 10001</p>
                                        <p class="mb-1">United States</p>
                                        <p class="mb-0">Phone: (555) 987-6543</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-outline-primary mt-2">
                            <i class="bi bi-plus me-2"></i> Add New Address
                        </button>

                        <div class="d-flex justify-content-between mt-4">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-arrow-left me-2"></i> Back to Cart
                            </button>
                            <button class="btn btn-primary">
                                Continue to Payment <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="checkout-card summary-card">
                    <div class="checkout-header">
                        <h5 class="mb-0 fw-bold">Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-3">3 Items in Cart</h6>

                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        class="product-img" alt="Headphones">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Bose QuietComfort 45</h6>
                                    <p class="text-muted small mb-1">1 × $329.00</p>
                                </div>
                                <div class="fw-bold">$329.00</div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        class="product-img" alt="iPhone">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">iPhone 14 Pro Max</h6>
                                    <p class="text-muted small mb-1">1 × $1,199.00</p>
                                </div>
                                <div class="fw-bold">$1,199.00</div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        class="product-img" alt="Smart Watch">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Apple Watch Series 8</h6>
                                    <p class="text-muted small mb-1">1 × $429.00</p>
                                </div>
                                <div class="fw-bold">$429.00</div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
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
                            <div class="d-flex justify-content-between">
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
                            <label for="promoCode" class="form-label small text-muted">Promo Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="promoCode"
                                    placeholder="Enter code">
                                <button class="btn btn-outline-secondary btn-sm" type="button">Apply</button>
                            </div>
                        </div>

                        <div class="alert alert-success small">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <div>
                                    <p class="mb-0 fw-bold">You saved $140.00 on this order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-card mt-3">
                    <div class="checkout-header">
                        <h5 class="mb-0 fw-bold">Need Help?</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-primary">
                                <i class="bi bi-headset fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Customer Support</h6>
                                <p class="text-muted small mb-0">24/7 dedicated support</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-chat-left-text me-2"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/checkout.js') }}"></script>
@endsection
