<?php
    require_once("./database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bank System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Global CSS -->
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span>Bestudi</span>Bank
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="login.php" class="btn btn-outline-primary me-2">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </a>
                    <a href="register.php" class="btn btn-primary">
                        <i class="fas fa-user-plus me-2"></i>Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content animate">
                        <h1 class="hero-title">Smart Banking for Modern Life</h1>
                        <p class="hero-subtitle">Simple bank system for educational purposes.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="register.php" class="btn btn-light btn-lg">
                                <i class="fas fa-wallet me-2"></i>Open Account
                            </a>
                            <a href="#" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-mobile-alt me-2"></i>Download App
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate delay-1">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/4400/4400823.png" alt="Banking App" class="img-fluid" style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="text-center mb-5 animate">
                <h2 class="h3 text-uppercase text-primary">Why Choose Us</h2>
                <h3 class="display-5 fw-bold mb-4">Banking Made Simple</h3>
                <p class="text-muted mx-auto" style="max-width: 700px;">We provide innovative financial solutions to help you manage your money with ease and confidence.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 animate delay-1">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Secure Transactions</h4>
                        <p class="text-muted">Bank-level encryption and multi-factor authentication keep your money safe.</p>
                    </div>
                </div>
                
                <div class="col-md-4 animate delay-1">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>24/7 Access</h4>
                        <p class="text-muted">Manage your accounts anytime, anywhere with our mobile and online banking.</p>
                    </div>
                </div>
                
                <div class="col-md-4 animate delay-1">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <h4>Great Rates</h4>
                        <p class="text-muted">Competitive interest rates on savings accounts and loans to grow your money.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container animate delay-2">
            <h2 class="display-5 fw-bold mb-4">Ready to get started?</h2>
            <p class="lead text-muted mb-5">Join thousands of satisfied customers banking with us today.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="register.php" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-user-plus me-2"></i>Sign Up Free
                </a>
                <a href="#" class="btn btn-outline-primary btn-lg px-4">
                    <i class="fas fa-question-circle me-2"></i>Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-white mb-4"><span>Bestudi</span>Bank</h5>
                    <p>Providing innovative financial solutions since 2025. Your trusted partner in banking.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-white mb-4">Banking</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Accounts</a></li>
                        <li class="mb-2"><a href="#">Loans</a></li>
                        <li class="mb-2"><a href="#">Cards</a></li>
                        <li class="mb-2"><a href="#">Investments</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-white mb-4">Support</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Help Center</a></li>
                        <li class="mb-2"><a href="#">Contact Us</a></li>
                        <li class="mb-2"><a href="#">Security</a></li>
                        <li class="mb-2"><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="text-white mb-4">Connect With Us</h5>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="small text-muted">© 2025 BestudiBank. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./resources/js/app.js"></script>
</body>
</html>