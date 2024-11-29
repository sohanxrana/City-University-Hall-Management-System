<?php
session_start();

// Mock data (replace this with database queries in a real project)
$students = [
    ["username" => "student", "password" => "password123", "data" => [
        "name" => "John Doe",
        "bookedRooms" => "Room 301",
        "playgroundBooking" => "Basketball Court - 6 PM",
        "paymentStatus" => "Paid",
        "mealPlan" => "Vegetarian - Plan A"
    ]]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    foreach ($students as $student) {
        if ($student["username"] === $username && $student["password"] === $password) {
            $_SESSION["student"] = $student["data"];
            echo json_encode(["status" => "success"]);
            exit;
        }
    }

    echo json_encode(["status" => "error", "message" => "Invalid credentials"]);
}
?>
