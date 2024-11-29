<?php

session_start();
if (!isset($_SESSION["student"])) {
    header("Location: ../view/auth/login.html");
    exit;
}

$student = $_SESSION["student"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Welcome, <?php echo $student["name"]; ?></h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Booked Room</h5>
                        <p class="card-text"><?php echo $student["bookedRooms"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Playground Booking</h5>
                        <p class="card-text"><?php echo $student["playgroundBooking"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Status</h5>
                        <p class="card-text"><?php echo $student["paymentStatus"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Meal Plan</h5>
                        <p class="card-text"><?php echo $student["mealPlan"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</body>
</html>
