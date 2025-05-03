@extends("layouts.master")

@section("content")
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Our Story</h1>
        <p class="lead mb-4">Discover the journey behind ModernShop and the passion that drives us</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Store" class="img-fluid about-img">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Welcome to ModernShop</h2>
                <p class="lead">Founded in 2015, ModernShop began as a small startup with a big vision: to revolutionize online shopping.</p>
                <p>Our journey started in a tiny garage with just three employees and a passion for delivering quality products with exceptional customer service. Today, we've grown into one of the leading e-commerce platforms, serving millions of customers worldwide.</p>
                <p>What sets us apart is our commitment to innovation, sustainability, and customer satisfaction. We carefully curate our product selection to ensure we offer only the best items that meet our high standards of quality and value.</p>
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Quality Products</h5>
                                <p class="text-muted mb-0">Rigorously tested</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Fast Delivery</h5>
                                <p class="text-muted mb-0">Worldwide shipping</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">24/7 Support</h5>
                                <p class="text-muted mb-0">Dedicated team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-undo"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Easy Returns</h5>
                                <p class="text-muted mb-0">30-day policy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Mission" class="img-fluid about-img">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="section-title">Our Mission & Values</h2>
                <p>At ModernShop, we believe in more than just selling products. We're committed to creating meaningful connections with our customers and making a positive impact on our community and the environment.</p>

                <div class="accordion mt-4" id="missionAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Customer First Approach
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#missionAccordion">
                            <div class="accordion-body">
                                We put our customers at the heart of everything we do. From product selection to after-sales support, every decision is made with our customers' best interests in mind.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Sustainability Commitment
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#missionAccordion">
                            <div class="accordion-body">
                                We're committed to reducing our environmental impact through eco-friendly packaging, carbon-neutral shipping, and partnerships with sustainable brands.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Innovation Driven
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#missionAccordion">
                            <div class="accordion-body">
                                We continuously invest in technology and processes to enhance your shopping experience, from AI-powered recommendations to seamless checkout processes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">By The Numbers</h2>
                <p class="lead">Our growth and impact in numbers</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">10M+</div>
                    <h5>Happy Customers</h5>
                    <p class="text-muted mb-0">Worldwide</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">50K+</div>
                    <h5>Products</h5>
                    <p class="text-muted mb-0">Carefully curated</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">150+</div>
                    <h5>Team Members</h5>
                    <p class="text-muted mb-0">Dedicated staff</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">24/7</div>
                    <h5>Support</h5>
                    <p class="text-muted mb-0">Customer service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="lead">The passionate people behind ModernShop</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="team-img" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="mb-1">Sarah Johnson</h5>
                        <p class="text-muted mb-2">CEO & Founder</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="team-img" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="mb-1">Michael Chen</h5>
                        <p class="text-muted mb-2">CTO</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="team-img" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="mb-1">Emily Rodriguez</h5>
                        <p class="text-muted mb-2">Marketing Director</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="team-img" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="mb-1">David Wilson</h5>
                        <p class="text-muted mb-2">Head of Customer Experience</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="lead">Trusted by thousands of happy customers worldwide</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="testimonial-img" alt="Customer">
                        <div>
                            <h5 class="mb-0">Jessica Thompson</h5>
                            <div class="product-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"I've been shopping with ModernShop for years and their service never disappoints. The quality of products is exceptional and their customer support is top-notch."</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="testimonial-img" alt="Customer">
                        <div>
                            <h5 class="mb-0">Robert Martinez</h5>
                            <div class="product-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"The fast shipping and easy returns policy make ModernShop my go-to online store. I recently had to return an item and the process was seamless."</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="testimonial-img" alt="Customer">
                        <div>
                            <h5 class="mb-0">Amanda Lee</h5>
                            <div class="product-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"I love that ModernShop focuses on sustainable products. It's refreshing to shop from a company that cares about the environment as much as I do."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">Trusted By Leading Brands</h2>
                <p class="lead">We partner with the best in the industry</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col text-center">
                <img src="https://via.placeholder.com/150x60?text=Brand+1" class="brand-logo img-fluid" alt="Brand Logo">
            </div>
            <div class="col text-center">
                <img src="https://via.placeholder.com/150x60?text=Brand+2" class="brand-logo img-fluid" alt="Brand Logo">
            </div>
            <div class="col text-center">
                <img src="https://via.placeholder.com/150x60?text=Brand+3" class="brand-logo img-fluid" alt="Brand Logo">
            </div>
            <div class="col text-center">
                <img src="https://via.placeholder.com/150x60?text=Brand+4" class="brand-logo img-fluid" alt="Brand Logo">
            </div>
            <div class="col text-center">
                <img src="https://via.placeholder.com/150x60?text=Brand+5" class="brand-logo img-fluid" alt="Brand Logo">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Experience ModernShop?</h2>
        <p class="lead mb-5">Join millions of happy customers and discover why we're different</p>
        <a href="#" class="btn btn-white btn-lg me-3">Shop Now</a>
        <a href="#" class="btn btn-outline-light btn-lg">Learn More</a>
    </div>
</section>
@endsection