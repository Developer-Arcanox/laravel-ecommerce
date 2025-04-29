@extends("layouts.admin")

@section("content")
        <!-- Page Content -->
        <div class="container-fluid p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">Dashboard Overview</h4>
                <div>
                    <button class="btn btn-outline-secondary me-2">
                        <i class="bi bi-calendar me-2"></i> Last 30 Days
                    </button>
                    <button class="btn btn-primary">
                        <i class="bi bi-download me-2"></i> Export
                    </button>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card dashboard-card stats-card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Total Revenue</h6>
                                    <h3 class="mb-0">$24,780</h3>
                                    <small class="text-success">
                                        <i class="bi bi-arrow-up"></i> 12.5% from last month
                                    </small>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card dashboard-card stats-card sales h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Total Sales</h6>
                                    <h3 class="mb-0">1,245</h3>
                                    <small class="text-success">
                                        <i class="bi bi-arrow-up"></i> 8.2% from last month
                                    </small>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-receipt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card dashboard-card stats-card orders h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">New Orders</h6>
                                    <h3 class="mb-0">186</h3>
                                    <small class="text-danger">
                                        <i class="bi bi-arrow-down"></i> 3.1% from last month
                                    </small>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card dashboard-card stats-card customers h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">New Customers</h6>
                                    <h3 class="mb-0">84</h3>
                                    <small class="text-success">
                                        <i class="bi bi-arrow-up"></i> 5.7% from last month
                                    </small>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Charts Row -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="card dashboard-card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Revenue Overview</h5>
                                <div>
                                    <button class="btn btn-sm btn-outline-secondary">Daily</button>
                                    <button class="btn btn-sm btn-outline-secondary active">Weekly</button>
                                    <button class="btn btn-sm btn-outline-secondary">Monthly</button>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card dashboard-card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Sales by Category</h5>
                            <div class="chart-container">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Orders & Top Products -->
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card dashboard-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Recent Orders</h5>
                                <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#MS-456789</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="30" height="30">
                                                    <span>John Smith</span>
                                                </div>
                                            </td>
                                            <td>Jun 15, 2023</td>
                                            <td>$1,973.56</td>
                                            <td><span class="order-status processing">Processing</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#MS-456788</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="30" height="30">
                                                    <span>Sarah Johnson</span>
                                                </div>
                                            </td>
                                            <td>Jun 14, 2023</td>
                                            <td>$429.00</td>
                                            <td><span class="order-status completed">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#MS-456787</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="30" height="30">
                                                    <span>Michael Brown</span>
                                                </div>
                                            </td>
                                            <td>Jun 14, 2023</td>
                                            <td>$2,499.00</td>
                                            <td><span class="order-status pending">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#MS-456786</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="30" height="30">
                                                    <span>Emily Davis</span>
                                                </div>
                                            </td>
                                            <td>Jun 13, 2023</td>
                                            <td>$329.00</td>
                                            <td><span class="order-status completed">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#MS-456785</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=80&q=80" class="rounded-circle me-2" width="30" height="30">
                                                    <span>David Wilson</span>
                                                </div>
                                            </td>
                                            <td>Jun 12, 2023</td>
                                            <td>$1,199.00</td>
                                            <td><span class="order-status cancelled">Cancelled</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card dashboard-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Top Selling Products</h5>
                                <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-thumb me-3" alt="iPhone">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">iPhone 14 Pro Max</h6>
                                            <small class="text-muted">256GB, Space Black</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-1">$1,199.00</h6>
                                            <small class="text-success">24 sold</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-thumb me-3" alt="Headphones">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Bose QuietComfort 45</h6>
                                            <small class="text-muted">Wireless Headphones</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-1">$329.00</h6>
                                            <small class="text-success">18 sold</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-thumb me-3" alt="Smart Watch">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Apple Watch Series 8</h6>
                                            <small class="text-muted">GPS, 45mm</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-1">$429.00</h6>
                                            <small class="text-success">15 sold</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-thumb me-3" alt="Camera">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Sony A7 IV Camera</h6>
                                            <small class="text-muted">28-70mm Lens</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-1">$2,499.00</h6>
                                            <small class="text-success">12 sold</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" class="product-thumb me-3" alt="Sneakers">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Nike Air Max 270</h6>
                                            <small class="text-muted">Men's Running Shoes</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-1">$160.00</h6>
                                            <small class="text-success">10 sold</small>
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