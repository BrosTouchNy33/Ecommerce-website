<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Us</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <style>
    .contact{
        width: 100%;
        height: 70vh;
        margin-top: 70px;
        position: relative;
    }
    .contact img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .txt-con{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background-color: rgba(0, 0, 0, 0.216);
        text-align: center;
        padding: 10rem 0px;
    }
    .txt-con h1{
        font-size: 50px;
        color: white;
        font-weight: bold;
    }
    .txt-size{
        width: 98%;
        height: 100px;
        padding: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        box-shadow: 1px 1px 5px rgb(211, 209, 209);
        border-radius: 5px;
    }
    .shop-banner{
        width: 100%;
        height: 340px;
        /* background-color: blueviolet; */
    }
</style>
</head>
<body>
  <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./index.html">Brand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link "  href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./about.php">About</a>
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
    <div class="contact container" >
        <img src="./image/bg_1.jpg" alt="">
        <div class="txt-con">
            <p class="fs-3 text-light fw-bold">We sale fresh food</p>
            <h1>About Us</h1>
        </div>
        
    </div>

    <div class="feature-bg my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h1 class="pb-3 text-black">Why <span class="text-warning">Brand</span></h1>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon p-4 h-25">
										<i class="fas fa-shipping-fast text-warning fs-2"></i>
									</div>
									<div class="content">
										<h5>Home Delivery</h5>
										<p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon p-4 h-25">
										<i class="fas fa-money-bill-alt text-warning fs-2"></i>
									</div>
									<div class="content">
										<h5>Best Price</h5>
										<p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon p-4 h-25">
										<i class="fas fa-briefcase text-warning fs-2"></i>
									</div>
									<div class="content">
										<h5>Custom Box</h5>
										<p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon p-4 h-25">
										<i class="fas fa-sync-alt text-warning fs-2"></i>
									</div>
									<div class="content">
										<h5>Quick Refund</h5>
										<p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="col-lg-5">
                    <img src="./image/feature-bg.jpg" alt="" class="w-100 h-100 object-fit-cover img-thumbnail">
                </div>
			</div>
		</div>
	</div>
    <section class="shop-banner">
    	<div class="container position-relative w-100 h-100">
            <img src="./image/1.jpg" alt="" class="w-100 h-100 object-fit-cover">
        	<div class="position-absolute top-0 pt-5 ps-5 w-full">
                <h1 class="fw-bold">December sale is on! <br> with big <span class="text-warning">Discount...</span></h1>
                <div class="sale-percent"><span class="fs-3">Sale! <br> Upto</span> 50% <span>off</span></div>
                <a href="./index.html" class="btn btn-danger">Shop Now</a>
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
</body>
</html>