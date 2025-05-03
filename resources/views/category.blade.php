@extends('layouts.master')

@section('content')
    <!-- Category Header -->
    <section class="category-header text-center">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Furniture</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold mb-3">Furniture Collection</h1>
            <p class="lead">Modern designs for every room in your home</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3">
                    <div class="category-sidebar">
                        <!-- Categories -->
                        <div class="sidebar-card mb-4">
                            <div class="card-body">
                                <h5 class="sidebar-title">Categories</h5>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action active">All
                                        Furniture</a>
                                    <a href="#" class="list-group-item list-group-item-action">Sofas & Couches</a>
                                    <a href="#" class="list-group-item list-group-item-action">Chairs</a>
                                    <a href="#" class="list-group-item list-group-item-action">Tables</a>
                                    <a href="#" class="list-group-item list-group-item-action">Beds</a>
                                    <a href="#" class="list-group-item list-group-item-action">Storage</a>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="sidebar-card mb-4">
                            <div class="card-body">
                                <h5 class="sidebar-title">Price Range</h5>
                                <div class="mb-3">
                                    <label for="priceRange" class="form-label">Max Price: $<span
                                            id="priceValue">500</span></label>
                                    <input type="range" class="form-range" min="50" max="2000" step="50"
                                        id="priceRange" value="500">
                                </div>
                                <div class="row g-2">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Min" value="0">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Max" value="500">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Color Filter -->
                        <div class="sidebar-card mb-4">
                            <div class="card-body">
                                <h5 class="sidebar-title">Colors</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colorBlack" checked>
                                    <label class="form-check-label" for="colorBlack">Black</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colorWhite" checked>
                                    <label class="form-check-label" for="colorWhite">White</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colorGray">
                                    <label class="form-check-label" for="colorGray">Gray</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colorBrown">
                                    <label class="form-check-label" for="colorBrown">Brown</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="colorBlue">
                                    <label class="form-check-label" for="colorBlue">Blue</label>
                                </div>
                            </div>
                        </div>

                        <!-- Material Filter -->
                        <div class="sidebar-card mb-4">
                            <div class="card-body">
                                <h5 class="sidebar-title">Materials</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="materialWood" checked>
                                    <label class="form-check-label" for="materialWood">Wood</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="materialMetal" checked>
                                    <label class="form-check-label" for="materialMetal">Metal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="materialFabric">
                                    <label class="form-check-label" for="materialFabric">Fabric</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="materialLeather">
                                    <label class="form-check-label" for="materialLeather">Leather</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="materialPlastic">
                                    <label class="form-check-label" for="materialPlastic">Plastic</label>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Products -->
                        <div class="sidebar-card">
                            <div class="card-body">
                                <h5 class="sidebar-title">Featured Products</h5>
                                <div class="d-flex mb-3">
                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                        class="rounded me-3" width="60" height="60" alt="Product">
                                    <div>
                                        <h6 class="mb-0">Modern Sofa</h6>
                                        <div class="text-warning small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-primary fw-bold">$479</span>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                        class="rounded me-3" width="60" height="60" alt="Product">
                                    <div>
                                        <h6 class="mb-0">Wooden Chair</h6>
                                        <div class="text-warning small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-primary fw-bold">$149</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                        class="rounded me-3" width="60" height="60" alt="Product">
                                    <div>
                                        <h6 class="mb-0">Coffee Table</h6>
                                        <div class="text-warning small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text-primary fw-bold">$254</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="col-lg-9">
                    <!-- Filter/Sort Bar -->
                    <div class="filter-section mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <h5 class="mb-0">Furniture <span class="text-muted">(48 products)</span></h5>
                            </div>
                            <div class="col-md-8">
                                <div class="d-md-flex justify-content-md-end align-items-center">
                                    <div class="me-3 mb-2 mb-md-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="viewMode"
                                                id="gridView" checked>
                                            <label class="form-check-label" for="gridView"><i
                                                    class="fas fa-th-large"></i></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="viewMode"
                                                id="listView">
                                            <label class="form-check-label" for="listView"><i
                                                    class="fas fa-list"></i></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="me-2">Sort by:</span>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                id="sortDropdown" data-bs-toggle="dropdown">
                                                Best Selling
                                            </button>
                                            <ul class="dropdown-menu sort-dropdown">
                                                <li><a class="dropdown-item active" href="#">Best Selling</a></li>
                                                <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                                                <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                                                <li><a class="dropdown-item" href="#">Newest Arrivals</a></li>
                                                <li><a class="dropdown-item" href="#">Customer Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Grid -->
                    <div class="row">
                        <!-- Product 1 -->
                        @foreach ($products as $product)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="product-card card h-100">
                                    <img src="{{ asset('storage/productFeaturedImage/' . $product->productImage->where('featured', 'yes')->first()->imagePath) }}"
                                        class="product-img card-img-top" alt="Modern Velvet Sofa">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-muted">{{ $product->category }}</span>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span
                                                    class="text-decoration-line-through text-muted me-2">${{ $product->price }}</span>
                                                <span class="fw-bold text-primary">${{ $product->original_price }}</span>
                                            </div>
                                            <form action="{{ route('cart.add') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="productID" value="{{ $product->id }}">
                                                <input type="submit" class="btn btn-sm btn-outline-primary fas fa-plus"
                                                    value="+">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="mb-3">Get 10% Off Your First Order</h2>
                    <p class="mb-4">Subscribe to our newsletter for exclusive deals and design inspiration</p>
                    <form class="row g-2">
                        <div class="col-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
