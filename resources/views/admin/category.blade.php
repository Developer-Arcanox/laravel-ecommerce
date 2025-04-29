@extends("layouts.admin")

@section("content")
<!-- Main Content -->
<main class="col-md-9 col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fas fa-plus me-2"></i>Add New Category
            </button>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search categories...">
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-filter me-1"></i> Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                        <li><a class="dropdown-item" href="#">All Categories</a></li>
                        <li><a class="dropdown-item" href="#">Active</a></li>
                        <li><a class="dropdown-item" href="#">Inactive</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-sort me-1"></i> Sort By
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item" href="#">Name (A-Z)</a></li>
                        <li><a class="dropdown-item" href="#">Name (Z-A)</a></li>
                        <li><a class="dropdown-item" href="#">Newest First</a></li>
                        <li><a class="dropdown-item" href="#">Oldest First</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Grid View -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>All Categories</h5>
                <div>
                    <button class="btn btn-sm btn-outline-secondary active"><i class="fas fa-th-large"></i></button>
                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-list"></i></button>
                </div>
            </div>
        </div>

        <!-- Category Cards -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Electronics">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Electronics</h5>
                        <span class="badge status-active">Active</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Smartphones, laptops, TVs and more</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 245 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Fashion">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Fashion</h5>
                        <span class="badge status-active">Active</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Clothing, shoes, accessories</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 189 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1583947581924-a31d2358f8f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Home & Garden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Home & Garden</h5>
                        <span class="badge status-active">Active</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Furniture, decor, appliances</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 132 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Food & Grocery">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Food & Grocery</h5>
                        <span class="badge status-active">Active</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Groceries, beverages, snacks</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 87 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Beauty & Health">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Beauty & Health</h5>
                        <span class="badge status-inactive">Inactive</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Cosmetics, skincare, vitamins</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 56 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top category-img" alt="Sports & Outdoors">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-1">Sports & Outdoors</h5>
                        <span class="badge status-active">Active</span>
                    </div>
                    <p class="card-text text-muted small mb-2">Equipment, apparel, gear</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-light text-dark"><i class="fas fa-boxes me-1"></i> 74 Products</span>
                        <div>
                            <button class="action-btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</main>
</div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.category.add') }}" method="post" id="categoryForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="avatar-upload">
                                <div class="avatar-preview" style="background-image: url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');">
                                </div>
                                <button type="button" class="btn-upload">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" class="d-none" accept="image/*">
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name">
                            </div>
                            <div class="mb-3">
                                <label for="parentCategory" class="form-label">Parent Category (Optional)</label>
                                <select class="form-select" id="parentCategory">
                                    <option selected value="">None</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Fashion</option>
                                    <option value="3">Home & Garden</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="categoryDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="categoryDescription" name="categoryDescription" rows="3" placeholder="Enter a brief description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="categoryStatus" id="statusActive" value="active" checked>
                                    <label class="form-check-label" for="statusActive">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="categoryStatus" id="statusInactive" value="inactive">
                                    <label class="form-check-label" for="statusInactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="categorySubmit">Save Category</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="avatar-upload">
                                <div class="avatar-preview" style="background-image: url('https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');">
                                </div>
                                <button type="button" class="btn-upload">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" class="d-none" accept="image/*">
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="editCategoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="editCategoryName" value="Electronics">
                            </div>
                            <div class="mb-3">
                                <label for="editParentCategory" class="form-label">Parent Category (Optional)</label>
                                <select class="form-select" id="editParentCategory">
                                    <option selected value="">None</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Fashion</option>
                                    <option value="3">Home & Garden</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="editCategoryDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="editCategoryDescription" rows="3">Smartphones, laptops, TVs and more</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="editCategoryStatus" id="editStatusActive" value="active" checked>
                                    <label class="form-check-label" for="editStatusActive">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="editCategoryStatus" id="editStatusInactive" value="inactive">
                                    <label class="form-check-label" for="editStatusInactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the <strong>"Electronics"</strong> category?</p>
                <p class="text-danger"><i class="fas fa-exclamation-circle me-2"></i>This action cannot be undone. All products in this category will be moved to "Uncategorized".</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="confirmDelete">
                    <label class="form-check-label" for="confirmDelete">
                        I understand the consequences and want to proceed
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" disabled id="deleteButton">Delete Category</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/admin/category.js') }}"></script>

@endsection