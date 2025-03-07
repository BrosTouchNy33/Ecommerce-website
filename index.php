<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </head>
  <body>
    <!-- Navbar -->
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
          <a class="navbar-brand" href="./index.php">Brand</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./about.php">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./service.php">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./contact.php">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

    <!-- Carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide carousel-container"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <!-- Carousel Items with Images -->
        <div class="carousel-item active">
          <img src="image/banner-image-1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="image/banner-image-2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="image/banner-image-2.jpg" class="d-block w-100" alt="..." />
        </div>
        <!-- Carousel Controls -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <section class="py-5 new-product">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="mb-0">Newly Arrived Brands</h2>
          <a href="#" class="btn btn-outline-secondary btn-sm"
            >View All Categories →</a
          >
        </div>
        <div
          class="scroll-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 new-products"
        ></div>
      </div>
    </section>
    <!--Best selling-->
    <div class="container my-4 Best-selling">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Newly Arrived Brands</h2>
        <a href="#" class="btn btn-outline-secondary btn-sm"
          >View All Categories →</a
        >
      </div>
      <div
        class="scroll-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 best-selling"
      >
        <!-- Product Card -->

        <!-- Repeat above card structure for more products -->
      </div>
    </div>
    <!-- Cart Modal -->
   <div
    class="modal fade"
    id="cartModal"
    tabindex="-1"
    aria-labelledby="cartModalLabel"
    aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">Cart Details</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Product</th>
              <th>Price</th>
              <th>img</th>
            </tr>
          </thead>
          <tbody id="cartTableBody">
            <!-- Cart items will be dynamically injected here -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
        <button
          type="button"
          class="btn btn-success"
          onclick="showCheckoutPopup()"
        >
          Checkout
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Cart Detail Popup -->
    <div id="cartPopup" class="popup cart-popup">
      <div class="popup-header">
        <h5>Cart Details</h5>
        <button type="button" class="btn-close" onclick="toggleCartPopup()">
          ×
        </button>
      </div>
      <div class="popup-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Product</th>
              <th>Price</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody id="cartTableBody">
            <!-- Cart items dynamically injected here -->
          </tbody>
        </table>
      </div>
      <div class="popup-footer">
        <button class="btn btn-secondary" onclick="toggleCartPopup()">
          Close
        </button>
        <button class="btn btn-success" onclick="showCheckoutPopup()">
          Proceed to Payment
        </button>
      </div>
    </div>

    <!-- Checkout Popup -->
    <div id="checkoutPopup" class="popup">
      <div class="popup-header">
        <h5>Checkout Details</h5>
        <button type="button" class="btn-close" onclick="toggleCheckoutPopup()"></button>
      </div>
      <div class="popup-body">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Product</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody id="checkoutTableBody">
            <!-- Checkout items dynamically injected here -->
          </tbody>
        </table>
      </div>
      <div class="popup-footer">
        <span id="checkoutTotal" style="font-weight: bold">Total: $0.00</span>
        <button class="btn btn-secondary" onclick="toggleCheckoutPopup()">
          Cancel
        </button>
        <button class="btn btn-primary" onclick="proceedToPayment()">
          Complete Payment
        </button>
      </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white pt-4 pb-3">
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
