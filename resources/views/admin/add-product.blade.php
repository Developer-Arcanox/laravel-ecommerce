@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/product/addProduct.css') }}">

    <!-- Main Content -->
    <form action="{{ route('product.add.submit') }}" method="post" id="addProductForm" enctype="multipart/form-data">
        @csrf

        <div class="container-fluid py-4">
            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-0">Add New Product</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add New</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <button class="btn btn-outline-secondary me-2">
                        <i class="fas fa-times me-1"></i> Cancel
                    </button>
                    <button class="btn btn-primary" id="addProductSubmitBtn">
                        <i class="fas fa-save me-1"></i> Save Product
                    </button>
                </div>
            </div>

            <!-- Product Form -->
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-4" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic"
                                type="button" role="tab">Basic Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media"
                                type="button" role="tab">Media</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" data-bs-target="#pricing"
                                type="button" role="tab">Pricing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory"
                                type="button" role="tab">Inventory</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping"
                                type="button" role="tab">Shipping</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo"
                                type="button" role="tab">SEO</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabsContent">
                        <!-- Basic Info Tab -->
                        <div class="tab-pane fade show active" id="basic" role="tabpanel">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-section">
                                        <h3 class="section-title">Product Information</h3>
                                        <div class="mb-3">
                                            <label for="productName" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="productName" id="productName"
                                                placeholder="Enter product name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="productDescription" class="form-label">Description</label>
                                            <textarea class="form-control" name="productDescription" id="productDescription" rows="5"
                                                placeholder="Enter detailed product description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3 class="section-title">Organization</h3>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="productCategory" class="form-label">Category</label>
                                                <select class="form-select" name="productCategory" id="productCategory">
                                                    <option selected disabled>Select category</option>
                                                    @foreach ($category as $product_category)
                                                        <option value="{{ $product_category->name }}">
                                                            {{ $product_category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="productSubcategory" class="form-label">Subcategory</label>
                                                <select class="form-select" id="productSubcategory" disabled>
                                                    <option selected disabled>Select subcategory</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="productBrand" class="form-label">Brand</label>
                                                <select class="form-select" id="productBrand">
                                                    <option selected disabled>Select brand</option>
                                                    <option>Sony</option>
                                                    <option>Bose</option>
                                                    <option>Apple</option>
                                                    <option>Samsung</option>
                                                    <option>JBL</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="productStatus" class="form-label">Status</label>
                                                <select class="form-select" name="productStatus" id="productStatus">
                                                    <option value="published">Published</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="archived">Archived</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3 class="section-title">Tags</h3>
                                        <div class="tags-container mb-3 p-2 border rounded">
                                            <div class="d-flex flex-wrap" id="tagsList">
                                                <span class="tag">
                                                    wireless
                                                    <span class="tag-remove"><i class="fas fa-times"></i></span>
                                                </span>
                                                <span class="tag">
                                                    headphones
                                                    <span class="tag-remove"><i class="fas fa-times"></i></span>
                                                </span>
                                                <input type="text" class="tag-input" id="tagInput"
                                                    placeholder="Add tags...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-section">
                                        <h3 class="section-title">Featured Image</h3>
                                        <div class="image-upload-container mb-3" id="featuredImageUpload">
                                            <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                            <h5>Upload Featured Image</h5>
                                            <p class="text-muted small">Drag & drop image here or click to browse</p>
                                            <input type="file" name="featuredImageInput" id="featuredImageInput"
                                                class="d-none">
                                        </div>
                                        <div class="image-preview-container d-flex flex-wrap" id="featuredImagePreview">
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3 class="section-title">Product Variants</h3>
                                        <div class="mb-3">
                                            <label class="form-label">Options</label>
                                            <div id="variantOptions">
                                                <div class="variant-option mb-2">
                                                    <select class="form-select form-select-sm me-2" style="width: 120px;">
                                                        <option selected>Color</option>
                                                        <option>Size</option>
                                                        <option>Material</option>
                                                        <option>Style</option>
                                                    </select>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Add values (comma separated)">
                                                    <span class="variant-remove"><i class="fas fa-times"></i></span>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary mt-2" id="addVariantOption">
                                                <i class="fas fa-plus me-1"></i> Add Option
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Media Tab -->
                        <div class="tab-pane fade" id="media" role="tabpanel">
                            <div class="form-section">
                                <h3 class="section-title">Product Gallery</h3>
                                <div class="image-upload-container mb-4" id="galleryUpload">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                    <h5>Upload Product Images</h5>
                                    <p class="text-muted small">Drag & drop images here or click to browse</p>
                                    <input type="file" name="imageGallery[]" id="galleryInput" class="d-none"
                                        multiple>
                                </div>
                                <div class="image-preview-container d-flex flex-wrap" id="galleryPreview">
                                    <div class="image-preview">
                                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                            alt="Product">
                                        <div class="remove-btn">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="image-preview">
                                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                            alt="Product">
                                        <div class="remove-btn">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="image-preview">
                                        <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                            alt="Product">
                                        <div class="remove-btn">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section">
                                <h3 class="section-title">Videos</h3>
                                <div class="mb-3">
                                    <label class="form-label">YouTube or Vimeo URL</label>
                                    <input type="text" class="form-control" placeholder="https://">
                                </div>
                            </div>
                        </div>

                        <!-- Pricing Tab -->
                        <div class="tab-pane fade" id="pricing" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Pricing</h3>
                                        <div class="mb-3">
                                            <label for="productPrice" class="form-label">Price</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" name="productPrice"
                                                    id="productPrice" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="productComparePrice" class="form-label">Compare at Price</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" name="productOriginalPrice"
                                                    id="productComparePrice" placeholder="0.00">
                                            </div>
                                            <div class="form-text">To show a reduced price, enter the original price here.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="productCost" class="form-label">Cost per Item</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="productCost"
                                                    placeholder="0.00">
                                            </div>
                                            <div class="form-text">Customers won't see this.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Tax</h3>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="chargeTax" checked>
                                                <label class="form-check-label" for="chargeTax">
                                                    Charge tax on this product
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="taxCode" class="form-label">Tax Code</label>
                                            <input type="text" class="form-control" id="taxCode"
                                                placeholder="Enter tax code">
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3 class="section-title">Point of Sale (POS)</h3>
                                        <div class="mb-3">
                                            <label for="productBarcode" class="form-label">Barcode (ISBN, UPC, GTIN,
                                                etc.)</label>
                                            <input type="text" class="form-control" id="productBarcode"
                                                placeholder="Enter barcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inventory Tab -->
                        <div class="tab-pane fade" id="inventory" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Inventory</h3>
                                        <div class="mb-3">
                                            <label for="productSku" class="form-label">SKU (Stock Keeping Unit)</label>
                                            <input type="text" class="form-control" id="productSku"
                                                placeholder="e.g. SN-WH1000XM4-BLK">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="trackInventory"
                                                    checked>
                                                <label class="form-check-label" for="trackInventory">
                                                    Track inventory
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inventoryQuantity" class="form-label">Quantity</label>
                                            <input type="number" class="form-control" name="quantity"
                                                id="inventoryQuantity" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inventoryPolicy" class="form-label">Inventory Policy</label>
                                            <select class="form-select" id="inventoryPolicy">
                                                <option value="deny">Don't allow backorders</option>
                                                <option value="continue">Allow backorders</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Restock Notifications</h3>
                                        <div class="mb-3">
                                            <label for="restockThreshold" class="form-label">Restock Threshold</label>
                                            <input type="number" class="form-control" id="restockThreshold"
                                                value="10">
                                            <div class="form-text">Get notified when inventory drops below this number.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="restockQuantity" class="form-label">Restock Quantity</label>
                                            <input type="number" class="form-control" id="restockQuantity"
                                                value="100">
                                            <div class="form-text">Suggested quantity to reorder.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Tab -->
                        <div class="tab-pane fade" id="shipping" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Shipping Details</h3>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="physicalProduct"
                                                    checked>
                                                <label class="form-check-label" for="physicalProduct">
                                                    This is a physical product
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="productWeight" class="form-label">Weight</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="productWeight"
                                                    placeholder="0.0">
                                                <span class="input-group-text">kg</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Dimensions</label>
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Length">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Width">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Height">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Shipping Options</h3>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="freeShipping">
                                                <label class="form-check-label" for="freeShipping">
                                                    This product qualifies for free shipping
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="shippingClass" class="form-label">Shipping Class</label>
                                            <select class="form-select" id="shippingClass">
                                                <option selected>No shipping class</option>
                                                <option>Fragile</option>
                                                <option>Oversized</option>
                                                <option>Refrigerated</option>
                                            </select>
                                            <div class="form-text">Shipping classes are used by certain shipping methods to
                                                group similar products.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SEO Tab -->
                        <div class="tab-pane fade" id="seo" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Search Engine Listing</h3>
                                        <div class="mb-3">
                                            <label for="seoTitle" class="form-label">Page Title</label>
                                            <input type="text" class="form-control" id="seoTitle">
                                            <div class="form-text">50-60 characters recommended</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seoDescription" class="form-label">Meta Description</label>
                                            <textarea class="form-control" id="seoDescription" rows="3"></textarea>
                                            <div class="form-text">150-160 characters recommended</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seoUrl" class="form-label">URL Handle</label>
                                            <div class="input-group">
                                                <span class="input-group-text">https://example.com/products/</span>
                                                <input type="text" class="form-control" id="seoUrl"
                                                    placeholder="sony-wh-1000xm4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-section">
                                        <h3 class="section-title">Search Engine Preview</h3>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <h6 class="text-primary mb-0">Sony WH-1000XM4 Wireless Noise Cancelling
                                                        Headphones</h6>
                                                    <small
                                                        class="text-success">https://example.com/products/sony-wh-1000xm4</small>
                                                </div>
                                                <p class="small text-muted mb-0">
                                                    Industry-leading noise cancellation with Dual Noise Sensor technology.
                                                    Up to
                                                    30-hour battery life with quick charging. Touch sensor controls for easy
                                                    operation.
                                                </p>
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
    </form>
    <script src="{{ asset('assets/js/product/addProduct.js') }}"></script>
@endsection
