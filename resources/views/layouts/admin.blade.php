<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ModernShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/dashboard.css') }}">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4 class="fw-bold mb-0 text-primary">ModernShop</h4>
        </div>

        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-box-seam"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-people"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-graph-up"></i>
                        <span>Analytics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-tags"></i>
                        <span>Discounts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-chat-left-text"></i>
                        <span>Reviews</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-search">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Search...">
                </div>
            </div>

            <div class="header-actions">
                <div class="dropdown me-3">
                    <a href="#" class="text-dark" data-bs-toggle="dropdown">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            5
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0" style="width: 300px;">
                        <div class="p-3 border-bottom">
                            <h6 class="mb-0">Notifications (5)</h6>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-cart-check fs-4 text-success"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold">New order received</p>
                                        <small class="text-muted">Order #MS-456789</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-person-plus fs-4 text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold">New customer registered</p>
                                        <small class="text-muted">John Smith</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-chat-left-text fs-4 text-warning"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold">New product review</p>
                                        <small class="text-muted">iPhone 14 Pro Max</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top text-center">
                            <a href="#" class="text-primary">View all notifications</a>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="32" height="32">
                        <span class="d-none d-md-inline">Admin User</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i> Help</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sign out</a>
                    </div>
                </div>
            </div>
        </header>

        @yield("content")

        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/js/admin/dashboard.js') }}"></script>
</body>

</html>