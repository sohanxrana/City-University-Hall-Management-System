<?php
// Start session to track user booking status
session_start();

// Example: Initialize a default set of rooms (simulating a database)
$rooms = [
    ['id' => 1, 'name' => 'Room A', 'status' => 'available'],
    ['id' => 2, 'name' => 'Room B', 'status' => 'available'],
    ['id' => 3, 'name' => 'Room C', 'status' => 'booked'],
    ['id' => 4, 'name' => 'Room D', 'status' => 'available'],
];

// Simulate storing a student's current booking
$studentBooking = isset($_SESSION['booking']) ? $_SESSION['booking'] : null;

// Handle booking request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['room_id'])) {
    $room_id = $_POST['room_id'];
    // Find the selected room
    foreach ($rooms as &$room) {
        if ($room['id'] == $room_id && $room['status'] == 'available') {
            // Book the room (update status and store the booking in session)
            $room['status'] = 'booked';
            $_SESSION['booking'] = ['room' => $room['name'], 'date' => $_POST['booking_date']];
            $studentBooking = $_SESSION['booking'];
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard - Room Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      /* Sidebar and content styles omitted for brevity (same as previous code) */
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <h4 class="text-center p-3">Student Dashboard</h4>
      <a href="#" class="menu-item" data-target="dashboard-section">🏠 Dashboard</a>
      <a href="#" class="menu-item" data-target="room-booking-section">🛏️ Room Booking</a>
      <a href="#" class="menu-item" data-target="playground-section">⚽ Playground Booking</a>
      <a href="#" class="menu-item" data-target="payment-section">💳 Payments</a>
      <a href="#" class="menu-item" data-target="meal-plan-section">🍽️ Meal Plan</a>
      <a href="#" class="menu-item" data-target="notifications-section">🔔 Notifications</a>
      <a href="logout.php">🚪 Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid"></div>
      </nav>
      <!-- Room Booking Section -->
      <div id="room-booking-section" class="section active">
        <h2>Room Booking</h2>
        
        <!-- Show current booking if any -->
        <?php if ($studentBooking): ?>
          <div class="alert alert-success">
            <strong>Booking Confirmed!</strong> You have booked <?php echo htmlspecialchars($studentBooking['room']); ?> for <?php echo htmlspecialchars($studentBooking['date']); ?>.
          </div>
        <?php endif; ?>

        <h4>Available Rooms</h4>
        <div class="row">
          <?php foreach ($rooms as $room): ?>
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars($room['name']); ?></h5>
                  <p class="card-text">
                    Status: <?php echo htmlspecialchars(ucwords($room['status'])); ?>
                  </p>
                  <?php if ($room['status'] === 'available'): ?>
                    <form method="POST">
                      <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>" />
                      <input type="date" name="booking_date" required />
                      <button type="submit" class="btn btn-primary mt-2">Book This Room</button>
                    </form>
                  <?php else: ?>
                    <p class="text-danger">This room is currently booked.</p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      
      <!-- Other sections here (same as previous code) -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // JavaScript to handle menu clicks and dynamic section display (same as previous code)
    </script>
  </body>
</html>
