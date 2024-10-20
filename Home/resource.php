<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FINPLAN - Financial Resources</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Financial Resources, Blogs, Videos, Workshops" name="keywords">
    <meta content="Access a wide range of financial resources including blogs, videos, and workshops to enhance your financial knowledge and management skills." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


     <!-- Navbar Start  <i class="fa fa-cut me-3"></i> -->
     <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase">FINPLAN</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.php" class="dropdown-item">SERVICES</a>
                        <a href="fin_advisor.php" class="dropdown-item">FINANCIAL ADVISORS</a>
                        <a href="resource.php" class="dropdown-item">RESOURCES</a>
                        <a href="../User_Dashboard/index.html" class="dropdown-item">DASHBOARD</a>
                       <!-- <a href="404.html" class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
                <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                <a href="about.php" class="nav-item nav-link">About US</a>
                <a href="contact.php" class="nav-item nav-link">Contact US</a>
            </div>

            <?php
                    session_status() === PHP_SESSION_ACTIVE ?: session_start();
                     if (!isset($_SESSION['id'])) {  ?>
                        <a href="../User_Dashboard/signup.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">SIGNIN<i class="fa fa-arrow-right ms-3"></i></a>
                        <?php
                      }
                      else{  ?>
                      <form action="logout.php" method="post">
                        <button type="submit"  name="logout"class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></button> 
                      </form> <?php
                      }
                    ?>
          <!--  <a href="" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">SIGNIN<i class="fa fa-arrow-right ms-3"></i></a>   -->
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Financial Resources Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Page Header -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Financial Resources</p>
                <h1 class="text-uppercase">Enhance Your Financial Knowledge</h1>
            </div>
            <!-- Resources Grid -->
            <div class="row g-4">
                <!-- Resource Item 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-book resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Budgeting Guide</h5>
                        <p>Learn how to create and manage a budget effectively to achieve your financial goals.</p>
                        <a class="btn btn-primary mt-auto" href="resources/budgeting-guide.html">Read More</a>
                    </div>
                </div>
                <!-- Resource Item 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-video resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Investment Strategies</h5>
                        <p>Explore various investment options and strategies to grow your wealth over time.</p>
                        <a class="btn btn-primary mt-auto" href="resources/investment-strategies.html">Watch Video</a>
                    </div>
                </div>
                <!-- Resource Item 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-chalkboard-teacher resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Webinars & Workshops</h5>
                        <p>Join our webinars and workshops to gain deeper insights into personal finance management.</p>
                        <a class="btn btn-primary mt-auto" href="resources/webinars.html">Join Now</a>
                    </div>
                </div>
                <!-- Resource Item 4 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-podcast resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Podcasts</h5>
                        <p>Listen to our expert-led podcasts covering a wide range of financial topics.</p>
                        <a class="btn btn-primary mt-auto" href="resources/podcasts.html">Listen Now</a>
                    </div>
                </div>
                <!-- Resource Item 5 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-chart-line resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Financial Calculators</h5>
                        <p>Utilize our financial calculators to plan and visualize your financial future effectively.</p>
                        <a class="btn btn-primary mt-auto" href="resources/calculators.html">Use Calculator</a>
                    </div>
                </div>
                <!-- Resource Item 6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="resource-item position-relative overflow-hidden bg-secondary d-flex flex-column h-100 p-5">
                        <div class="mb-3">
                            <i class="fas fa-lightbulb resource-icon"></i>
                        </div>
                        <h5 class="text-uppercase mb-3">Blog Articles</h5>
                        <p>Read our latest blog articles for tips, advice, and updates on personal finance.</p>
                        <a class="btn btn-primary mt-auto" href="resources/blog.html">Read Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Financial Resources End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt='John'>">
                    <h4 class="text-uppercase">JOHN</h4>
                    <p class="text-primary">BARBER</p>
                    <span class="fs-5">FIN PLAN helped me save more and manage my budget effortlessly!</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt='Sam'>">
                    <h4 class="text-uppercase">SAM</h4>
                    <p class="text-primary">DRIVER</p>
                    <span class="fs-5">The expert advice I received was a game changer for my financial planning!</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt='Alex'>">
                    <h4 class="text-uppercase">ALEX</h4>
                    <p class="text-primary">SOFTWARE ENGINEER</p>
                    <span class="fs-5">Thanks to FIN PLAN, I'm finally confident in managing my finances.</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Get In Touch -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Get In Touch</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>123 Street, New York, USA</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+012 345 67890</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>info@example.com</span>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="service.html">Our Services</a>
                    <a class="btn btn-link" href="terms.html">Terms & Condition</a>
                    <a class="btn btn-link" href="support.html">Support</a>
                </div>
                <!-- Newsletter -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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
