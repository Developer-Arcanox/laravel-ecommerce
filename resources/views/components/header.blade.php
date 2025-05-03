    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.category') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.about') }}">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-dark me-2"><i class="fas fa-user"></i></a>
                    @endguest
                    @auth
                    <a href="#" class="btn btn-outline-dark position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                    @endauth
                    <a href="#" class="btn btn-outline-dark me-2"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </nav>