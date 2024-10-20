
<?php      
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_conn.php');

// Start the session
session_start();

// Check if 'id' is set in the GET request
if (isset($_POST['id'])) {
    $vID = $_POST['id'];
    
    // Prepare the SQL query
    $sql = mysqli_query($conn, "SELECT * FROM adv_reg WHERE id = '$vID'");

    // Check for query error
    if (!$sql) {
        die("Query failed: " . mysqli_error($conn));
    }
    
    if ($sql->num_rows > 0) {
        $data = mysqli_fetch_array($sql);
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $qual = $data['qual'];
        $description = $data['description'];
        $image = $data['photo'];
        $id = $data['id'];
    } else {
        echo "No advisor found with this ID.";
    }
} else {
    echo "<script>location.replace('index.php');</script>";
}

?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FINPLAN - Financial Advisor Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    

    <!-- Navbar Start -->
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
                    </div>
                </div>
                <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                <a href="about.php" class="nav-item nav-link">About US</a>
                <a href="contact.php" class="nav-item nav-link">Contact US</a>
            </div>

            <?php
                session_status() === PHP_SESSION_ACTIVE ?: session_start();
                if (!isset($_SESSION['id'])) { ?>
                    <a href="../User_Dashboard/signup.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">SIGNIN<i class="fa fa-arrow-right ms-3"></i></a>
                <?php } else { ?>
                    <form action="logout.php" method="post">
                        <button type="submit" name="logout" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></button> 
                    </form>
                <?php } ?>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Advisor Details Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="../Advisor_Dashboard/uploads/advisors/<?php echo $image;?>" alt="Advisor Picture" class="img-fluid mb-3">
                    <h2 class="text-uppercase"><?php echo $name;?></h2>
                    <p class="text-muted">Certified Financial Planner</p>
                </div>
                <div class="col-lg-8">
                    <h3>Qualifications</h3>
                    <ul>
                        <li><?php echo $qual;?></li>
                    </ul>
                    <h3>Schedule an Appointment</h3>
                    <form action="appointment.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Preferred Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Advisor Details End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
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
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for the latest updates!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 rounded-pill ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 mt-1 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-light py-4">
            <div class="container text-center">
                <p class="mb-0">&copy; <a href="#" class="text-light">Your Site Name</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/jquery.waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
