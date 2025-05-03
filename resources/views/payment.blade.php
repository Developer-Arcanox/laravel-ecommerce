@extends('layouts.master')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}">
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
                            <div class="checkout-step active">2</div>
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

                <!-- Payment Methods -->
                <div class="payment-card">
                    <div class="payment-header">
                        <h5 class="mb-0 fw-bold">Select Payment Method</h5>
                    </div>
                    <div class="card-body p-0">
                        <!-- Credit/Debit Card -->
                        <div class="payment-option selected">
                            <div class="form-check d-flex align-items-start">
                                <input class="form-check-input me-3" type="radio" name="paymentMethod" id="creditCard"
                                    checked>
                                <div class="payment-icon me-3">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-check-label fw-bold" for="creditCard">
                                        Credit/Debit Card
                                    </label>

                                    <!-- Card Form (shown when selected) -->
                                    <div class="mt-3" id="creditCardForm">
                                        <div class="mb-3 card-input">
                                            <label for="cardNumber" class="form-label">Card Number</label>
                                            <input type="text" class="form-control" id="cardNumber"
                                                placeholder="1234 5678 9012 3456">
                                            <div class="card-types">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/visa/visa-original.svg"
                                                    class="payment-method-icon">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mastercard/mastercard-original.svg"
                                                    class="payment-method-icon">
                                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg"
                                                    class="payment-method-icon">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cardName" class="form-label">Name on Card</label>
                                                <input type="text" class="form-control" id="cardName"
                                                    placeholder="John Smith">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cardExpiry" class="form-label">Expiry Date</label>
                                                <input type="text" class="form-control" id="cardExpiry"
                                                    placeholder="MM/YY">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cardCvv" class="form-label">CVV</label>
                                                <input type="text" class="form-control" id="cardCvv" placeholder="123">
                                            </div>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="saveCard">
                                            <label class="form-check-label" for="saveCard">
                                                Save this card for future purchases
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider m-0"></div>

                        <!-- PayPal -->
                        <div class="payment-option">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-3" type="radio" name="paymentMethod" id="paypal">
                                <div class="payment-icon me-3">
                                    <i class="bi bi-paypal"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-check-label fw-bold" for="paypal">
                                        PayPal
                                    </label>
                                    <p class="small text-muted mb-0 mt-1">You'll be redirected to PayPal to complete your
                                        purchase securely</p>
                                </div>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/paypal/paypal-original.svg"
                                    width="60">
                            </div>
                        </div>

                        <div class="divider m-0"></div>

                        <!-- Apple Pay -->
                        <div class="payment-option">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-3" type="radio" name="paymentMethod" id="applePay">
                                <div class="payment-icon me-3">
                                    <i class="bi bi-apple"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-check-label fw-bold" for="applePay">
                                        Apple Pay
                                    </label>
                                </div>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg"
                                    width="60">
                            </div>
                        </div>

                        <div class="divider m-0"></div>

                        <!-- Google Pay -->
                        <div class="payment-option">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-3" type="radio" name="paymentMethod" id="googlePay">
                                <div class="payment-icon me-3">
                                    <i class="bi bi-google"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-check-label fw-bold" for="googlePay">
                                        Google Pay
                                    </label>
                                </div>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                                    width="60">
                            </div>
                        </div>

                        <div class="divider m-0"></div>

                        <!-- Amazon Pay -->
                        <div class="payment-option">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-3" type="radio" name="paymentMethod" id="amazonPay">
                                <div class="payment-icon me-3">
                                    <i class="bi bi-amazon"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-check-label fw-bold" for="amazonPay">
                                        Amazon Pay
                                    </label>
                                </div>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg"
                                    width="60">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Assurance -->
                <div class="payment-card mt-4">
                    <div class="card-body">
                        <div class="security-badge">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-shield-lock fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Secure Payment</h6>
                                    <p class="small text-muted mb-0">All transactions are encrypted and processed securely.
                                        We don't store your credit card information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-2"></i> Back to Shipping
                    </button>
                    <button class="btn btn-primary btn-lg px-4">
                        <a href="{{ route('confirm') }}">
                            <i class="bi bi-lock-fill me-2"></i> Complete Order
                        </a>
                    </button>
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
    <script src="{{ asset('assets/js/payment.js') }}"></script>
@endsection
