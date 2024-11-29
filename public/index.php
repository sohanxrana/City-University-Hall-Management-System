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
