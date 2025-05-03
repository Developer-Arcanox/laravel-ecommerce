@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/confirm.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Order Confirmation Header -->
                <div class="confirmation-card mb-4">
                    <div class="confirmation-header">
                        <i class="bi bi-check-circle-fill confirmation-icon"></i>
                        <h2 class="fw-bold mb-3">Order Confirmed!</h2>
                        <p class="mb-0">Thank you for your purchase, John!</p>
                    </div>
                    <div class="card-body text-center">
                        <p class="lead">Your order <span class="order-number">#MS-456789</span> has been received and is
                            being processed.</p>
                        <p>A confirmation email has been sent to <strong>john.smith@example.com</strong></p>

                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <button class="btn btn-primary px-4">
                                <i class="bi bi-truck me-2"></i> Track Order
                            </button>
                            <button class="btn btn-outline-primary px-4">
                                <i class="bi bi-receipt me-2"></i> View Invoice
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Order Tracking -->
                <div class="confirmation-card mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Order Status</h5>

                        <div class="tracking-progress">
                            <div class="tracking-step completed">
                                <h6 class="fw-bold">Order Confirmed</h6>
                                <p class="text-muted small mb-0">June 15, 2023 at 10:30 AM</p>
                            </div>

                            <div class="tracking-step active">
                                <h6 class="fw-bold">Preparing for Shipment</h6>
                                <p class="text-muted small mb-0">Expected to ship by June 16</p>
                            </div>

                            <div class="tracking-step">
                                <h6 class="fw-bold">Shipped</h6>
                                <p class="text-muted small mb-0">We'll notify you when shipped</p>
                            </div>

                            <div class="tracking-step">
                                <h6 class="fw-bold">Delivered</h6>
                                <p class="text-muted small mb-0">Estimated delivery: June 20-22</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <!-- Order Details -->
                        <div class="confirmation-card mb-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Order Details</h5>

                                <div class="mb-4">
                                    <div class="row align-items-center py-3 border-bottom">
                                        <div class="col-2">
                                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                                class="product-img" alt="Wireless Headphones">
                                        </div>
                                        <div class="col-6">
                                            <h6 class="mb-1">Bose QuietComfort 45</h6>
                                            <p class="text-muted small mb-0">Color: Black</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p class="mb-0">1 × $329.00</p>
                                        </div>
                                        <div class="col-2 text-end">
                                            <p class="mb-0 fw-bold">$329.00</p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center py-3 border-bottom">
                                        <div class="col-2">
                                            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                                class="product-img" alt="iPhone">
                                        </div>
                                        <div class="col-6">
                                            <h6 class="mb-1">iPhone 14 Pro Max</h6>
                                            <p class="text-muted small mb-0">256GB, Space Black</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p class="mb-0">1 × $1,199.00</p>
                                        </div>
                                        <div class="col-2 text-end">
                                            <p class="mb-0 fw-bold">$1,199.00</p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center py-3">
                                        <div class="col-2">
                                            <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                                class="product-img" alt="Smart Watch">
                                        </div>
                                        <div class="col-6">
                                            <h6 class="mb-1">Apple Watch Series 8</h6>
                                            <p class="text-muted small mb-0">45mm, Midnight</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p class="mb-0">1 × $429.00</p>
                                        </div>
                                        <div class="col-2 text-end">
                                            <p class="mb-0 fw-bold">$429.00</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-light p-3 rounded mb-4">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <h6 class="fw-bold mb-3">Shipping Address</h6>
                                            <p class="mb-1">John Smith</p>
                                            <p class="mb-1">123 Main Street, Apt 4B</p>
                                            <p class="mb-1">Brooklyn, NY 11201</p>
                                            <p class="mb-1">United States</p>
                                            <p class="mb-0">Phone: (555) 123-4567</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="fw-bold mb-3">Shipping Method</h6>
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-truck me-2"></i>
                                                <div>
                                                    <p class="mb-0">Standard Shipping</p>
                                                    <small class="text-muted">3-5 business days</small>
                                                </div>
                                            </div>
                                            <h6 class="fw-bold mb-3 mt-3">Payment Method</h6>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-credit-card me-2"></i>
                                                <div>
                                                    <p class="mb-0">Visa ending in 4242</p>
                                                    <small class="text-muted">Expires 05/2025</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-printer me-2"></i> Print Invoice
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-repeat me-2"></i> Buy Again
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Support -->
                        <div class="confirmation-card">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Need Help?</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <div class="d-flex">
                                            <div class="me-3 text-primary">
                                                <i class="bi bi-headset fs-2"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1">Customer Support</h6>
                                                <p class="text-muted small mb-2">Have questions about your order?</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="me-3 text-primary">
                                                <i class="bi bi-arrow-counterclockwise fs-2"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1">Returns & Exchanges</h6>
                                                <p class="text-muted small mb-2">Not satisfied with your purchase?</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Start Return</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="confirmation-card summary-card">
                            <div class="card-body">
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
                                        <span class="text-success">-$50.00</span>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="fw-bold">Total</h6>
                                    <h6 class="fw-bold">$2,063.56</h6>
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

                        <!-- Recommended Products -->
                        <div class="confirmation-card mt-3">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">You Might Also Like</h5>

                                <div class="row row-cols-1 g-3">
                                    <div class="col">
                                        <div class="card border-0 recommendation-card">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1592155931584-901ac15763e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                                        class="img-fluid rounded-start" alt="Laptop">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body py-2">
                                                        <h6 class="card-title mb-1">MacBook Pro 14"</h6>
                                                        <p class="text-muted small mb-1">M2 Pro, 16GB RAM</p>
                                                        <p class="card-text fw-bold mb-0">$1,999.00</p>
                                                        <button class="btn btn-sm btn-outline-primary mt-2">Add to
                                                            Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card border-0 recommendation-card">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                                        class="img-fluid rounded-start" alt="Camera">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body py-2">
                                                        <h6 class="card-title mb-1">Sony A7 IV Camera</h6>
                                                        <p class="text-muted small mb-1">28-70mm Lens</p>
                                                        <p class="card-text fw-bold mb-0">$2,499.00</p>
                                                        <button class="btn btn-sm btn-outline-primary mt-2">Add to
                                                            Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card border-0 recommendation-card">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                                        class="img-fluid rounded-start" alt="Sneakers">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body py-2">
                                                        <h6 class="card-title mb-1">Nike Air Max 270</h6>
                                                        <p class="text-muted small mb-1">Men's Running Shoes</p>
                                                        <p class="card-text fw-bold mb-0">$160.00</p>
                                                        <button class="btn btn-sm btn-outline-primary mt-2">Add to
                                                            Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
