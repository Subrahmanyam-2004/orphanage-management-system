<?php
    session_start();
?>u 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ananda Marga Children's Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
        /* Styling for the overlay background */
        .overlay {
            display: block; /* Changed from "none" to "block" to display it by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        /* Styling for the login popup */
        .popup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>



    
    <link href="img/amlogo.jpg" rel="icon">

  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
      
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><img src="img/amlogo.jpg" width="70px" height="70px"> Ananda Marga Children's Home</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="services.html" class="nav-item nav-link">Services</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="#" class="nav-item nav-link" onclick="openPopup()">Admin</a>

<div id="adminPopup" class="overlay">
    <div class="popup">
        <h2>Admin Login</h2>
        <form method="post" id="Login">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit" id="login" name="login">Login</button>
            <button onclick="closePopup()">Close</button>
        </form>

        <a href="#" onclick="forgotPassword()">Forgot Password?</a>

        
    </div>
</div>

<script>
function openPopup() {
    document.getElementById("adminPopup").style.display = "block";
}

function closePopup() {
    document.getElementById("adminPopup").style.display = "none";
}

function forgotPassword() {
    
    alert("Implement your 'Forgot Password' logic here.");
}
</script>
<?php
    if(isset($_POST['login'])){
        $username=$_POST['email'];
        $password=$_POST['password'];

        $host="localhost";
        $dbuser="root";
        $pwd="";
        $dbname="ananda marga orphanage";

        $conn=new mysqli($host,$dbuser,$pwd,$dbname);
        
        $st="select * from adminsignup where Email='$username' and password='$password';";
        $y=$conn->query($st);
        if($y->num_rows>0){
            $_SESSION['login']=true;
            echo "<script>window.location.href='menu.php'</script>";
        }
        else
        {
            
            echo "<script>alert('invalid login credentials');</script>";
        }
        $conn->close();
}
?>

                <a href="signup.html" class="btn btn-primary rounded-pill px-3 d-none d-lg-block" ><br>Sign Up<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
       
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/car1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Ananda Marga Orphanage</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"> "Where love finds a home and hope embraces hearts,
                                        At Ananda Marga Ophanage, every child's journey starts."</p>
                                    <a href="about.html" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">About Us</a>
                                    <a href="contact.html" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/front2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Ananda Marga Orphanage</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">"Where love finds a home and hope embraces hearts,
                                        At Ananda Marga Orphanage, every child's journey starts."</p>
                                    <a href="about.html" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">About Us</a>
                                    <a href="contact.html" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Orphanage Facilities</h1>
                    <p>Safe housing, Nutritious meals, Education, Nurturing,
                        Healthcare, Emotional support and Recreational activities</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa-solid fa-heart" style="color: #e10e0e; font-size: 3rem;"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <a href="care.html">  <h3 class="text-primary mb-3">Care</h3>
                                <p class="mb-0">Caring in our orphanage involves providing emotional support, a stable environment, and nurturing relationships to help orphaned children thrive.</p>
                            </a> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa-solid fa-hands-praying" style="color: #255b46; font-size: 3rem;"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <a href="yoga.html"><h3 class="text-success mb-3">Yoga</h3>
                                <p class="mb-0">Yoga is taught at Ananda Marga orphanages to promote physical and mental well-being among the children. </p>
                            </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <a href="healthyfood.html"><h3 class="text-warning mb-3">Healthy Food</h3>
                                <p class="mb-0">Food in orphanages is carefully prepared and nutritionally balanced to meet the dietary needs of the children.</p>
                            </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <a href="poslearn.html"><h3 class="text-info mb-3">Positive Learning</h3>
                                <p class="mb-0">Positive learning imparts academic knowledge , instills values of empathy, resilience, and teamwork, preparing children for a brighter and more compassionate future.</p>
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Learn More About Our Work And Our  Activities</h1>
                        <p>Ananda Marga, an orphanage dedicated to uplifting communities, extends beyond its walls to aid those in need. 
                            Members actively engage in diverse activities, including assisting the impoverished during critical situations. </p>
                        <p class="mb-4">During the Kerala floods, a dedicated team from Ananda Marga selflessly ventured to the affected areas, providing vital support and rescuing not only humans but also animals in distress. 
                            Their commitment exemplifies a holistic approach to humanitarian efforts, embodying the spirit of compassion and service.</p>
                        
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/saveanimals.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/saveanimals2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/saveanimals3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/teach.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Teaching In Our Orphanage</h1>
                                <p class="mb-4">Teaching at Ananda Marga Orphanage involves educating and nurturing orphaned or abandoned children. 
                                    Our mission includes academic instruction, life skills, and emotional support, tailored to each child's needs. 
                                    Collaborating closely with our dedicated caregivers, we prioritize cultural sensitivity and the development of confidence and self-esteem. 
                                    Thorough documentation aids in tracking progress, and we actively advocate for the children's well-being. 
                                    Joining Ananda Marga Orphanage as a teacher is an opportunity to make a lasting, positive impact on the lives of these resilient children.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Orphanage Teaching Classes</h1>
                    <p>Classes are personalized to cater to each child's unique needs and learning style.
                         They encompass academics, life skills, and personal development, ensuring every child thrives and prepares for a brighter future..</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-1.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Art & Drawing</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                      
                                        <p>Art and drawing are avenues of creative expression that empower the children to explore their imaginations and develop artistic skills. These activities foster self-confidence, emotional well-being.
                                            We provide a platform where each child's unique creativity can flourish, enhancing their overall growth and self-discovery.</p>
                                    </div>
                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-2.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Color Management</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                    <p>Color management in our orphanage involves creating an environment where colors are thoughtfully chosen to evoke positive emotions and stimulate creativity. 
                                        This approach fosters a visually appealing and emotionally nurturing atmosphere that enhances the well-being and development of the children.</p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/dance.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Athletic & Dance</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <p>In our orphanage, the children are not only receiving academic education but also benefiting from sports and dance programs. These activities
                                             provide a well-rounded development, promoting physical fitness, teamwork, discipline, and creative expression, enriching their lives and nurturing their talents.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/language.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Language & Speaking</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <p>In our orphanage, language and communication skills are nurtured through a supportive environment. 
                                            Children are encouraged to express themselves effectively, fostering their linguistic abilities and confidence in speaking. 
                                            This emphasis on language development helps empower the children and prepares them for successful communication in the future.</p>
                                    </div>
                                   
                                </div>
                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/science.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Real Science</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <p>In our orphanage, real science takes center stage as children engage in hands-on experiments and exploration. They delve into subjects like biology, chemistry, and physics, fostering a curiosity-driven approach to learning.
                                             These scientific experiences empower them with critical thinking skills and a deeper understanding of the world around them, opening doors to a future filled with limitless possibilities.</p>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/General knowlege.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">General Knowledge</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <p>In our orphanage, a vibrant atmosphere of general knowledge sharing prevails, where children engage in discussions, quiz sessions, and educational activities. 
                                            This fosters a culture of curiosity and continuous learning, broadening their horizons and preparing them for a brighter future.</p>
                                    </div>
                          
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2-299, Service Road, Adarsha Nagar, Visakhapatnam - 530040 (Indira Gandhi Nagar, Old Dairy Farm)</p>
                        <p class="mb-2"><a href="tel:+91 9030502164" class="text-white"> +91 9030502164</a></i></p>
                        <p class="mb-2"><a href="mailto:anandamarg@gmail.com" class="text-white">  anandamarga@gmail.com</a></i></p>
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
            
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/car1.jpg" alt=""  >
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/food.jpg" alt="" >
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
                        <h3 class="text-white mb-4">SignUp</h3>
                        
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <a href="signup.php"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <center><p>This website is designed by BLSY team</p></center>
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