<?php
session_start();
error_reporting(0);

if (!isset($_POST['update'])) {
    // Redirect if the user is not registered
    header("Location: updatebooking.php");
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
    $new_start_time = $_POST["new_starttime"];
    $new_end_time = $_POST["new_endtime"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Check if the new booking collides with existing bookings
    $sql_check_collision = "SELECT * FROM schedule WHERE slot_date = '$slot_date' AND 
                            ((start_time <= '$new_start_time' AND end_time >= '$new_start_time') OR 
                            (start_time <= '$new_end_time' AND end_time >= '$new_end_time'))";
    $result_collision = $conn->query($sql_check_collision);

    if ($result_collision->num_rows > 0) {
        // Collision detected, display message
        echo "<script>alert('The selected time slot is already booked for the hall. Please choose a different time.'); window.location.href = 'about.php';</script>";
        exit;
    }

    // Check if the booking exists
    $sql_check = "SELECT * FROM schedule WHERE person_name= '$person_name' AND slot_date = '$slot_date'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        // Booking exists, update it
        $sql = "UPDATE schedule SET start_time = '$new_start_time', end_time = '$new_end_time' WHERE person_name= '$person_name' AND slot_date = '$slot_date'";
    } else {
        // Booking doesn't exist, insert it
        $sql = "INSERT INTO schedule (hall_name, slot_date, person_name, start_time, end_time) 
                VALUES ('$hall_name', '$slot_date', '$person_name', '$new_start_time', '$new_end_time')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking updated successfully!'); window.location.href = 'about.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error updating booking: " . $conn->error . "'); window.location.href = 'about.php';</script>";
        exit;
    }

    $conn->close();
}
?>
