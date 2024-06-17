<?php
    session_start();
    if(!$_SESSION['login']){
        echo "<script>window.location.href='login.php';</script>";
    }

    if(isset($_POST['logout123'])){
        $_SESSION['login'] = false;
        echo "<script>window.location.href='login.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ananda Marga Children's Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/amlogo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <form method="post">
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><img src="img/amlogo.jpg" width="70px" height="70px"></i>Ananda Marga Children's Home</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="services.html" class="nav-item nav-link">Services</a>             
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="donating.php" class="nav-item nav-link">Donate</a>
                </div>
                <button id="logout123" name="logout123" type="submit"><a class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a></button>
            </div>
        </nav>
        </form>
        <!-- Navbar End -->

        <?php
            
            echo "<h4 style='text-align: center;'> Welcome ".$_SESSION['name']."!</h4>";
        ?>


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Children's Profile</h1>
                      </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa-solid fa-user" style="color: #ba3636; font-size: 2em;"></i>

                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Akhil</h3>
                                <p class="mb-0">Age : 10 years</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa-solid fa-user" style="color: #1c8252;  font-size: 2em; "></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Rajendra Prasad</h3>
                                <p class="mb-0">Age : 9 years</p>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa-solid fa-user" style="color: #ffea00;  font-size: 2em; "></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">M.Naga Chaitanya</h3>
                                <p class="mb-0">Age : 11 years</p>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa-solid fa-user" style="color: #00d4f0;font-size: 2em;"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">P.Durga</h3>
                                <p class="mb-0">Age : 11 years</p>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="facility-item">
                            <div class="facility-icon bg-secondary">
                                <span class="bg-secondary"></span>
                                <i class="fa-solid fa-user" style="color: #484c4c;font-size: 2em;"></i>
                                <span class="bg-secondary"></span>
                            </div>
                            <div class="facility-text bg-secondary">
                                <h3 class="text-secondary mb-3">Jagadeesh</h3>
                                <p class="mb-0">Age : 7 years</p>
                            </div>
                        </div>
                    </div>
                </div>
         
                <br><br><br>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa-solid fa-user" style="color: #ba3636; font-size: 2em;"></i>

                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Sandeep Kumar</h3>
                                <p class="mb-0">Age : 8 years</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa-solid fa-user" style="color: #1c8252;  font-size: 2em; "></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Vasu</h3>
                                <p class="mb-0">Age : 10 years</p>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa-solid fa-user" style="color: #ffea00;  font-size: 2em; "></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Suman</h3>
                                <p class="mb-0">Age : 9 years</p>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa-solid fa-user" style="color: #00d4f0;font-size: 2em;"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">M.Sai Teja</h3>
                                <p class="mb-0">Age : 10 years</p>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="facility-item">
                            <div class="facility-icon bg-secondary">
                                <span class="bg-secondary"></span>
                                <i class="fa-solid fa-user" style="color: #484c4c;font-size: 2em;"></i>
                                <span class="bg-secondary"></span>
                            </div>
                            <div class="facility-text bg-secondary">
                                <h3 class="text-secondary mb-3">Kalyan</h3>
                                <p class="mb-0">Age : 9 years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a href="qr.html" style="display: inline-block; padding: 10px 20px; font-size: 18px; font-weight: bold; text-align: center; text-decoration: none; background-color: #ff6b6b; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#e74c3c'" onmouseout="this.style.backgroundColor='#ff6b6b'">Click to Donate</a>
            <br><br>
            <a href="offerservice.php" style="display: inline-block; padding: 10px 20px; font-size: 18px; font-weight: bold; text-align: center; text-decoration: none; background-color: #ff6b6b; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#e74c3c'" onmouseout="this.style.backgroundColor='#ff6b6b'">Click to Provide Service</a>
        </div>
            

        
        <!-- Facilities End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2-299, Service Road, Adarsha Nagar, Visakhapatnam - 530040 (Indira Gandhi Nagar, Old Dairy Farm)</p>
                        <p class="mb-2"><a href="tel:+91 9030502164" class="text-white"><i class="fa fa-phone-alt me-3"> +91 9030502164</a></i></p>
                        <p class="mb-2"><a href="mailto:anandamarga@gmail.com" class="text-white"><i class="fa fa-envelope me-3">  anandamarga@gmail.com</a></i></p>
                        <div class="d-flex pt-2">
                            
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/groups/39082897131"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://youtu.be/NSkx8O0ynsE?si=8WCCp1npAcUf8zC5"><i class="fab fa-youtube"></i></a>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="about.html">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.html">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="services.html">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/img2.jpg" alt=""  >
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/cul3.jpg" alt="" >
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/cul2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/cul1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/study.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/teach.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <a href="signup.php"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Anand Marga Orphanage</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Home</a>
                               
                                <a href="contact.html">Help</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php
    if($_POST['logout123']){
        $_SESSION['login']=false;

        echo "<script>window.location.href='login.php'</script>";

    }
?>