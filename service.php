<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/nav-bar.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" aria.current="page" href="./service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services Section -->
    <section class="container mt-5 pt-5">
        <h2 class="text-center my-4">Our Services</h2>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Easy Shopping</h5>
                        <p class="card-text">Browse and shop from a wide range of products with an intuitive interface.</p>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-shipping-fast fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Fast Delivery</h5>
                        <p class="card-text">Get your orders delivered quickly with our reliable shipping partners.</p>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-lock fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Secure Payments</h5>
                        <p class="card-text">Enjoy hassle-free shopping with our secure and trusted payment options.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Service 4 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-exchange-alt fa-3x text-info mb-3"></i>
                        <h5 class="card-title">Easy Returns</h5>
                        <p class="card-text">Not satisfied? We offer easy returns and refunds for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-percent fa-3x text-danger mb-3"></i>
                        <h5 class="card-title">Exclusive Offers</h5>
                        <p class="card-text">Get amazing discounts and exclusive deals every week.</p>
                    </div>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-headset fa-3x text-secondary mb-3"></i>
                        <h5 class="card-title">24/7 Support</h5>
                        <p class="card-text">Our customer support team is here to assist you anytime, anywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white pt-4 pb-3  mt-5">
        <div class="container">
          <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-3">
              <h5>About Us</h5>
              <p class="small">
                We are dedicated to delivering the best products and services to our customers. Contact us for more information.
              </p>
            </div>
      
            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                <li><a href="#" class="text-white text-decoration-none">Products</a></li>
                <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
              </ul>
            </div>
      
            <!-- Contact Information -->
            <div class="col-md-4 mb-3">
              <h5>Contact</h5>
              <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt-fill"></i> 1234 Street Name, City, Country</li>
                <li><i class="bi bi-telephone-fill"></i> +1 234 567 890</li>
                <li><i class="bi bi-envelope-fill"></i> info@example.com</li>
              </ul>
            </div>
          </div>
      
          <div class="text-center mt-3">
            <small>&copy; 2024 Your Company. All Rights Reserved.</small>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
