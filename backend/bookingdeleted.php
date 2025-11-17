<?php
session_start();

if(!isset($_POST['cancel'])) {
    // Redirect if the user is not registered
    header("Location: deletebooking.php");
    exit; // Stop further execution
}

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "dbproject";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hall_name = $_POST["hall"];
    $slot_date = $_POST["slotdate"];
    $person_name = $_SESSION['username'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "DELETE FROM schedule WHERE hall_name = '$hall_name' or slot_date = '$slot_date' ";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "<script>alert('Booking canceled successfully!'); window.location.href = 'about.php';</script>";
            exit;
        } else {
            echo '<script>alert("No bookings found for the specified hall and date."); window.location.href = "about.php";</script>';
            exit;
        }
    } else {
        echo '<script>alert("Error canceling booking: ' . $conn->error . '");</script>';
    }

    $conn->close();
}
?>
<html>
<head>
<title>Cancel Booking </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
</body>
</html>
