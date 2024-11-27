<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/assets/img/icon.png">
    <title>City University - Hall Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!--Bootstrap linking-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- -------------------------- Header start ---------------------------->
    <header>
        <!------------------------- container start ---------------------------->
        <div class="container">
            <div class="header_contact">
                <div class="c-info">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:admin@cityuniversity.edu.bd">admin@cityuniversity.edu.bd</a>
                </div>
                <div class="c_box">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+8801819813111" class="c_text">+880-1819813111</a>
                </div>
            </div>
        </div>
        <!-- container end -->
    </header>
    <!-- -------------------------- Header end -------------------------- -->

    <!------------------------------ Spinner Start ----------------------------------------->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!----------------------------------------- Spinner End ------------------------------------------>

    <!---------------------------------------------- Navbar Start --------------------------------------------->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0 mt-2 mb-2">
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-3 p-lg-0">
                    <a href="index.html" class="city-logo"><img src="../assets/img/city-logo.png" alt="CU Logo"
                            width="90px" height="auto"></a>
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <!-- <a href="../view/pages/about.html" class="nav-item nav-link">About</a> -->
                    <!-- <a href="admin.html" class="nav-item nav-link">Admin-panel</a> -->
                    <a href="../view/pages/hallfacilities.html" class="nav-item nav-link">Hall Facilities</a>
                    <a href="../view/pages/in-roomFacilities.html" class="nav-item nav-link">In-Room Facilities</a>
                    <a href="../view/pages/admission.html" class="nav-item nav-link">Admission</a>
                    <a href="../view/pages/faq.html" class="nav-item nav-link">FAQ</a>
                    <a href="../view/pages/notice.html" class="nav-item nav-link">Notice</a>
                    <a href="../view/pages/Help.html" class="nav-item nav-link">Help Desk</a>
                    <a href="../view/pages/contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <!---------------------------------------------- Header Profile Menu Section Start --------------------------------------------->
                <?php if (isset($_SESSION['user_id'])): ?>
			    <div id="welcomeMessage" class="welcome-message">
			      Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
			    </div>
			    <?php endif; ?>

			    <div class="header">
			    <?php if (isset($_SESSION['user_id'])): ?>
			        <!-- Profile icon and dropdown for logged-in users -->
			        <div class="profile-container">
			            <div class="profile-icon" onclick="toggleDropdown()">👤</div>
			            <div id="dropdownMenu" class="dropdown-menu">
			                <a href="../view/admin/dashboard.php"><span class="icon">🏠</span>Dashboard</a>
			                <a href="view/notifications.php"><span class="icon">🔔</span>Notifications</a>
			                <a href="view/profile.php"><span class="icon">👤</span>Profile</a>
			                <a href="view/profile_settings.php"><span class="icon">⚙️</span>Settings</a>
			                <a href="../controller/auth/logout.php"><span class="icon">🚪</span>Logout</a>
			            </div>
			        </div>
			        <?php else: ?>
			        <!-- Login/Signup link for guests -->
			        <div class="combined-button">
			          <a href="../view/auth/signup.html" class="signup-btn" target="_blank"
			             title="Sign Up to Book Your Seat" aria-label="Sign Up to Book Your Seat">Sign Up</a>
			          <a href="../view/auth/login.html" class="login-btn" target="_blank"
			             title="Login to access your portal" aria-label="Login to access your portal">Login</a>
			        </div>
			        <?php endif; ?>
			    </div>
                <!---------------------------------------------- Header Profile Menu Section End --------------------------------------------->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid1" src="../assets/img/cuadmin.jpg" alt="cityuniversityfront">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
               style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-sm-10 col-lg-8">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Book Your Seat</h5>
                  <h1 class="display-3 text-white animated slideInDown">Creating a culture of excellence
                  </h1>
                  <p class="fs-5 text-white mb-4 pb-2">City University is committed to the idea of equal
                    opportunity, transparency and non-discrimation.</p>
                  <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                    More</a>
                                <a href="..\view\auth\login.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid1" src="../assets/img/Cityuniversycam.png" alt="Cityniversityview">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Visit Admission
                                    section</h5>
                                <h1 class="display-3 text-white animated slideInDown">Creating a culture of excellence
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">City University is committed to the idea of equal
                                    opportunity, transparency and non-discrimation.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contact
                                    us</a>
                                <a href="..\view\auth\login.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------- Carousel End -------------------------------------------------------------->

    <!-------------------------------------------------------Facilities Start----------------------------------------->
    <section id="facility">
        <!-- container start -->
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title bg-white text-center text-primary px-3">Facilities</h5>
            </div>
            <!-- <h3 class="section_heading">Facilities</h3> -->

            <div class="facility_main">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">In-room Amenities</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>One Bed per Student shall be offered</li>
                                <li>Fully furnished rooms with beds & underbed drawers</li>
                                <li>Study tables & Chair</li>
                                <li>Tube lights & Fan</li>
                                <li>Dustbin in each room</li>
                                <li>300 square feet spacious room</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">Self Help Amenities</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>Laundry Service</li>
                                <li>Filter Water facility to be provided</li>
                                <li>Medical facility available with first aid/ provided to sick Residents</li>
                                <li>Doctor on call number(s) to be shared with the students</li>
                                <li>Dining area</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">Cost-Effective Living Option</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>Cost-effective compared to other living options</li>
                                <li>Get all services together in the single hall cost</li>
                                <li>Long corridor infront of room</li>
                                <li>Separate balcony in each room</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">Electricity & Internet</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>Electricity facility</li>
                                <li>Generator service available (Need Based)</li>
                                <li>Broadband and wifi service</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">Housekeeping</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>Rooms</li>
                                <li>Washrooms</li>
                                <li>Common areas are cleaned on a daily basis</li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service_box">
                        <h4 class="section_sub_heading">Entertainment</h4>

                        <div class="service_list p_text">
                            <ul>
                                <li>Common Room</li>
                                <li>Indoor games like carrom , chess, table tennis etc.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="see_more_btn">
                <a href="hall-facilities.html" class="s_m_btn">SEE MORE</a>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-------------------------------------------------------Facilities END----------------------------------------->


    <!----------------------------------- More facilites Start ------------------------------------------------------>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title bg-white text-center text-primary px-3">More Facilities</h5>
            </div>
            <br>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5 class="mb-3">Hall Canteen</h5>
                            <p>We provide breakfast, lunch and dinner with good quality to ensure your good health.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Broadband</h5>
                            <p>We have the facility to provide the best broadband connection. Contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Playground</h5>
                            <p>We have 3 big size playground with two basketball field, 2 Batminton, 1 huge football
                                field.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Gym</h5>
                            <p>We prioritize your health and mind by providing top-notch gym facilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- More facilites End -->


    <!---------------------------------------------- About Start -------------------------------------->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../assets/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to eLEARNING</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!----------------------------------------- About End ----------------------------------------------------->


    <!----------------------------------- Hall Information Start----------------------------------------------->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Halls</h6>
                <h1 class="mb-5">Hall Information</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="../assets/img/gallery-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Fazlur Rahman Hall</h5>
                                    <small class="text-primary">600 Seats</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="../assets/img/gallery-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Mokbul Hossain Hall</h5>
                                    <small class="text-primary">500+ Seats</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="../assets/img/gallery-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Fatema Hall</h5>
                                    <small class="text-primary">400+ Seats</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="../assets/img/gallery-4.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin:  1px;">
                            <h5 class="m-0">Mona Hall</h5>
                            <small class="text-primary">300+ Seats</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------- Hall Information End ------------------------------------------------>

    <!-- ------------------------------------------- In-room Facility start ----------------------------------------------- -->
    <section id="in_room_facility">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title bg-white text-center text-primary px-3">In-room Facilities</h5>
            </div>

            <div class="in_room_main">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-bed"></i>
                            </div>
                            <p class="in_room_text">Separate Bed</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#000000">
                                            <path
                                                d="M11.46667,34.4c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h149.06667c2.06765,0.02924 3.99087,-1.05709 5.03322,-2.843c1.04236,-1.78592 1.04236,-3.99474 0,-5.78066c-1.04236,-1.78592 -2.96558,-2.87225 -5.03322,-2.843zM11.46667,57.33333v34.4h149.06667v-34.4zM86,68.8c3.1648,0 5.73333,2.56853 5.73333,5.73333c0,3.1648 -2.56853,5.73333 -5.73333,5.73333c-3.1648,0 -5.73333,-2.56853 -5.73333,-5.73333c0,-3.1648 2.56853,-5.73333 5.73333,-5.73333zM11.46667,103.2v17.2v17.2c-0.02924,2.06765 1.05709,3.99087 2.843,5.03322c1.78592,1.04236 3.99474,1.04236 5.78066,0c1.78592,-1.04236 2.87225,-2.96558 2.843,-5.03322h126.13333c-0.02924,2.06765 1.05709,3.99087 2.843,5.03322c1.78592,1.04236 3.99474,1.04236 5.78066,0c1.78592,-1.04236 2.87225,-2.96558 2.843,-5.03322v-17.2v-17.2zM86,114.66667c3.1648,0 5.73333,2.56853 5.73333,5.73333c0,3.1648 -2.56853,5.73333 -5.73333,5.73333c-3.1648,0 -5.73333,-2.56853 -5.73333,-5.73333c0,-3.1648 2.56853,-5.73333 5.73333,-5.73333z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="in_room_text">Fully furnished rooms</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-book-open"></i>
                            </div>

                            <p class="in_room_text">Study tables & Chair</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>

                            <p class="in_room_text">Proper lighting & Fan</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-tint"></i>
                            </div>

                            <p class="in_room_text">Filter Water</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-wifi"></i>
                            </div>

                            <p class="in_room_text">High speed internet</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-archive"></i>
                            </div>

                            <p class="in_room_text">Storage & Drawers</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-broom"></i>
                            </div>

                            <p class="in_room_text">Housekeeping</p>
                        </div>

                        <div class="in_room_box">
                            <div class="in_room_icon">
                                <i class="fas fa-trash"></i>
                            </div>

                            <p class="in_room_text">Dust Bin</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="see_more_btn">
                <a href="in-room-facilities.html" class="s_m_btn">See More</a>
            </div>
        </div>
    </section>
    <!-- ------------------------------------- In-room Facilities end ----------------------------------- -->


    <!-- -------------------------------------------- Life at hall start ---------------------------------------- -->
    <section id="life_at_hall">
        <div class="container_fluid">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title bg-white text-center text-primary px-3">Life at CU Hall</h5>
            </div>
            <div class="life_at_main">
                <div class="row img_row">
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/48780b5e2d897377679b71b8e45992d0.webp">Comfortable
                                    study enviroment</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/48780b5e2d897377679b71b8e45992d0.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/b323f1abf0c73ef5a275c5c8a03c6159.webp">CU
                                    Library in Campus</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/b323f1abf0c73ef5a275c5c8a03c6159.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/23536e95a3de862f2bb4a2cae88f1e10.webp">Frunished
                                    room environment</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/23536e95a3de862f2bb4a2cae88f1e10.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/370224ffb60191c055b229cde02ef2ad.webp">Spacious
                                    and clean dinning space</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/370224ffb60191c055b229cde02ef2ad.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/3d5d2e64d881393a279055b3eae884f1.webp">Student
                                    enjoying their spare time</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/3d5d2e64d881393a279055b3eae884f1.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-202451663b19e2e03ff0a99bdfaaaf443711.jpg">Student
                                    in CU Campus</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs51663b19e2e03ff0a99bdfaaaf443711.jpg"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/4da78371d2a92b00910a7962fb1f3431.webp">Student
                                    playing in common room</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/4da78371d2a92b00910a7962fb1f3431.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 img_main">
                        <div class="img_box">
                            <div class="img_overlay">
                                <a class="venobox" data-gall="gallery01"
                                    href="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/02e2ffc8a6c244070dec252389496804.webp">Studentwatching
                                    TV in Common room</a>
                            </div>
                            <img src="https://hall.daffodilvarsity.edu.bd/gallery/june-2024/thumbs/02e2ffc8a6c244070dec252389496804.webp"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="see_more_btn">
                <a href="http://campuslife.daffodil.university/sub-sub-category/26/view" target="_blank"
                    class="s_m_btn">See More</a>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------ Life at hall end ---------------------------------------------------- -->


    <!-------------------------------------- Hall super section starts -------------------------------------------------->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Hall Super</h6>
                <h1 class="mb-5">About Hall Super</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Abu Saiem</h5>
                            <small>FR Hall</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Apurbo Rahman</h5>
                            <small>Fazlur Rahman Hall</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Bristy Akter</h5>
                            <small>Mona Hossain Hall</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Morsheda Begum</h5>
                            <small>Fatema Hall</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------- Hall super section End ------------------------------------->

    <!-- ---------------------------------------------------------- FAQ start ---------------------------------------------- -->
    <section id="faq">
        <div class="container">
            <h3 class="section_heading">FAQ</h3>

            <div class="faq_main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="accordion accordion-flush" id="accordionFlushExampleOne">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Can students book a room and seat from home?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExampleOne">
                                    <div class="accordion-body">Yes, students can book a room from home online and
                                        physically going to Hall with their parents or local guardian to book a seat.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        What is the room capacity?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExampleOne">
                                    <div class="accordion-body">Four Students will be living in each room.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Is the medical facility available on the campus?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExampleOne">
                                    <div class="accordion-body">Yes, we have medical facility available on campus.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="accordion accordion-flush" id="accordionFlushExampleTwo">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Who is eligible to apply for student accommodation?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExampleTwo">
                                    <div class="accordion-body">Students parents or local guardian</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        When can I apply for accommodation?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExampleTwo">
                                    <div class="accordion-body">After university admission</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Is the Wi-Fi facility available in the hall?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExampleTwo">
                                    <div class="accordion-body">Yes, 24/7 high speed Wi-Fi facility is available in
                                        hall.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="see_more_btn">
                <a href="faq.html" class="s_m_btn">See More</a>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------- FAQ end  --------------------------------------------->


    <!-------------------------------------------- Testimonial Start -------------------------------------------------->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../assets/img\testimonial-1.png"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sohan Rana Apurbo</h5>
                    <p>FR Hall</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Fazlur Rahman Hall at City University is a prominent student residence,
                            offering a vibrant and supportive environment for academic and personal growth.
                            Equipped with modern amenities, the hall fosters a strong sense of community among its
                            residents.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../assets/img\testimonial-2.jpeg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Md Shahnur</h5>
                    <p>Mokbul Hall</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">In my 3 years of living experience, overall it was good, but there is a small
                            yet major problem:
                            there is no food system in the hall. But recently they are building canteen for us so I
                            guess it will be good.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../assets/img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Mona Hall</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Mona Hossain Hall at City University is a dedicated women's residence,
                            offering a safe and nurturing environment with modern facilities for female students.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../assets/img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Fatema Hall</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Fatema Hall at City University is a women's hall designed to offer a welcoming
                            and safe environment,
                            fostering academic focus and personal well-being with modern facilities.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../assets/img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Fatema Hall</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Fatema Hall at City University is a women's hall designed to offer a welcoming
                            and safe environment,
                            fostering academic focus and personal well-being with modern facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------- Testimonial End ---------------------------------------------------------->

    <!----------------------------------------------------------- Footer Start ------------------------------------------------------------------>

    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_location">
                            <h5 class="footer_heading">Location</h5>
                            <div class="footer_map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4657008881873!2d90.3097415!3d23.873099500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c2102dc1cd51%3A0x6f95e92193fc8978!2sCity%20University%20Bangladesh!5e0!3m2!1sen!2sbd!4v1726667971052!5m2!1sen!2sbd"
                                    width="220" height="173" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Quick Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">FAQs & Help</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Birulia, Savar, Dhaka</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a
                                href="tel:+8801874264850">+8801874264850</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a
                                href="mailto:hall.cityuniversity@gmail.com">hall.cityuniversity@gmail.com</a></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <p class="p_text">All rights reserved by City University. Copyright &copy; 2024.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------ Footer End ------------------------------------------------------------->


        <!---------------------------------------------------- Back to Top ------------------------------------------------------------>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!---------------------------------- JavaScript Libraries -------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="../assets/lib/wow/wow.min.js"></script>
        <script src="../assets/lib/easing/easing.min.js"></script>
        <script src="../assets/lib/waypoints/waypoints.min.js"></script>
        <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

        <!------------------- Javascript -------------------------->
        <script src="../assets/js/main.js"></script>
        <script>
          function toggleDropdown() {
              const dropdown = document.getElementById('dropdownMenu');
              dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
          }
          window.onclick = function(event) {
              if (!event.target.matches('.profile-icon')) {
                  const dropdown = document.getElementById('dropdownMenu');
                  if (dropdown) dropdown.style.display = 'none';
              }
          }
          function hideWelcomeMessage() {
              const message = document.getElementById('welcomeMessage');
              if (message) {
                  setTimeout(() => {
                      message.classList.add('hidden');
                  }, 2000);
              }
          }
          window.onload = hideWelcomeMessage;
        </script>

</body>

</html>
