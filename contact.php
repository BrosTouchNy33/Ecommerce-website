<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
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
    </style>
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
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contact container" >
        <img src="./image/bg_1.jpg" alt="">
        <div class="txt-con">
            <h1>Contact Us</h1>
        </div>
        
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="txt-size">
                    <p>Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="txt-size">
                    <p>Phone: + 1235 2355 98</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" >
                <div class="txt-size">
                    <p>Email: Brand@gmail.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                <div class="txt-size">
                    <p>Website Brand.com</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="forms container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 " >
                <iframe class="rounded w-100 h-100 shadow"" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29917.42393367526!2d104.92326896516096!3d11.559057306704492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2z4Z6X4Z-S4Z6T4Z-G4Z6W4Z-B4Z6J!5e0!3m2!1skm!2skh!4v1733648371742!5m2!1skm!2skh" width="100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <form action="" class="px-5">
                    <h4 class="text-center">Contact us</h4>
                    <div class="my-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="names" id="" class="form-control shadow-sm p-3 border-0" placeholder="Enter your name...">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="emails" id="" class="form-control shadow-sm p-3 border-0" placeholder="Enter your email...">
                    </div>
                    <div class="my-3">
                        <textarea name="message" rows="7" id="" class="form-control shadow-sm p-3 border-0" placeholder="Enter your message..."></textarea>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-danger p-3 rounded-pill border-0">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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