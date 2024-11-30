<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* General body styling */
      body {
        display: flex;
        height: 100vh;
        margin: 0;
        font-family: "Arial", sans-serif;
        background-color: #f8f9fa;
        overflow: hidden;
      }

      /* Sidebar styling */
      .sidebar {
        width: 250px;
        background-color: #2c3e50;
        color: #ecf0f1;
        display: flex;
        flex-direction: column;
        position: fixed;
        height: 100%;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      }

      .sidebar h4 {
        font-size: 20px;
        text-align: center;
        background-color: #34495e;
        margin: 0;
        padding: 15px 0;
        border-bottom: 1px solid #1c2833;
        letter-spacing: 1px;
      }

      .sidebar a {
        color: #bdc3c7;
        font-size: 16px;
        padding: 15px;
        text-decoration: none;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #34495e;
        transition: all 0.3s;
      }

      .sidebar a:hover {
        background-color: #34495e;
        color: #ecf0f1;
        padding-left: 20px;
      }

      .sidebar a span.icon {
        margin-right: 10px;
      }

      /* Main content styling */
      .main-content {
        margin-left: 250px;
        padding: 20px;
        background-color: #ffffff;
        width: 100%;
        overflow-y: auto;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .main-content h2 {
        font-size: 28px;
        color: #2c3e50;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }

      .main-content p {
        font-size: 16px;
        line-height: 1.6;
        color: #6c757d;
      }

      /* Navbar styling */
      .navbar {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .navbar-brand {
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
      }

      /* Section visibility */
      .section {
        display: none;
      }

      .section.active {
        display: block;
      }

      /* Responsive design */
      @media screen and (max-width: 768px) {
        .sidebar {
          width: 200px;
        }

        .main-content {
          margin-left: 200px;
        }

        .sidebar a {
          font-size: 14px;
          padding: 10px;
        }
      }

      @media screen and (max-width: 576px) {
        .sidebar {
          width: 100px;
        }

        .main-content {
          margin-left: 100px;
        }

        .sidebar a {
          font-size: 12px;
          padding: 8px;
        }

        .sidebar a span.icon {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <h4 class="text-center p-3">Student Dashboard</h4>
      <a href="#" class="menu-item" data-target="dashboard-section"
        >🏠 Dashboard</a
      >
      <a href="#" class="menu-item" data-target="room-booking-section"
        >🛏️ Room Booking</a
      >
      <a href="#" class="menu-item" data-target="playground-section"
        >⚽ Playground Booking</a
      >
      <a href="#" class="menu-item" data-target="payment-section"
        >💳 Payments</a
      >
      <a href="#" class="menu-item" data-target="meal-plan-section"
        >🍽️ Meal Plan</a
      >
      <a href="#" class="menu-item" data-target="notifications-section"
        >🔔 Notifications</a
      >
      <a href="logout.php">🚪 Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid"></div>
      </nav>
      <div id="dashboard-section" class="section active">
        <h2>Dashboard Overview</h2>
        <p>
          Welcome, <?php echo htmlspecialchars($student['username']);?>
        </p>
      </div>
      <div id="room-booking-section" class="section">
        <h2>Room Booking</h2>
      </div>
      <div id="playground-section" class="section">
        <h2>Playground Booking</h2>
      </div>
      <div id="payment-section" class="section">
        <h2>Payments</h2>
      </div>
      <div id="meal-plan-section" class="section">
        <h2>Meal Plan</h2>
        <p>
          Meal Plan:
          <?php echo $student['meal_plan'];
          ?>
        </p>
      </div>
      <div id="notifications-section" class="section">
        <h2>Notifications</h2>
        <p>You have no new notifications.</p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // JavaScript to handle menu clicks and dynamic section display
      document.querySelectorAll(".menu-item").forEach((item) => {
        item.addEventListener("click", (event) => {
          event.preventDefault();

          // Hide all sections
          document.querySelectorAll(".section").forEach((section) => {
            section.classList.remove("active");
          });

          // Show the selected section
          const target = event.currentTarget.getAttribute("data-target");
          document.getElementById(target).classList.add("active");
        });
      });
    </script>
  </body>
</html>
