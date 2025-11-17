<?php
session_start();

if(!isset($_POST['bookhall'])) {
    // Redirect if the user is not registered
    header("Location: bookhall.php");
    exit; // Stop further execution
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "dbproject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve username from session
    $person_username = $_SESSION['username'];

    // Retrieve form data
    $hall_name = $_POST["hall"];
    $slot_date = $_POST["slotdate"];
    $start_time = $_POST["starttime"];
    $end_time = $_POST["endtime"];
    $person_username = $_POST["username"];
    // Check if the hall is already booked
    $sql_check_booking = "SELECT * FROM Schedule WHERE slot_date = '$slot_date' AND hall_name = '$hall_name' AND start_time = '$start_time'";
    $result_check_booking = $conn->query($sql_check_booking);

    if ($result_check_booking->num_rows > 0) {
       // echo "Hall is already booked"; 
    //  <br><br>   <a href="about.php">Main Menu</a>
    echo "<script>alert('Hall is already booked!'); window.location.href = 'about.php';</script>";
    exit;
            //  exit;
  } else {
        // Hall is available, proceed with booking
        $sql_book_hall = "INSERT INTO Schedule (hall_name, slot_date, person_name, start_time, end_time) VALUES ('$hall_name', '$slot_date', '$person_username', '$start_time', '$end_time')";
        
        if ($conn->query($sql_book_hall) === TRUE) {
           // echo "Hall Booked!";   
            // <!-- <br>
                //  <!-- Provide link or button to go back to main menu (about.php) -->
            // <!-- <a href="about.php">Main menu</a>' --> -->
            echo "<script>alert('Booking successful!'); window.location.href = 'about.php';</script>";
        exit;
           } else {

            // <!-- echo "Error: " . $sql_book_hall . "<br>" . $conn->error; -->
            echo "<script>alert('Booking failed!: " . $conn->error . "'); window.location.href = 'about.php';</script>";
        exit;
        }
    }

    // Close the connection
    $conn->close();
}
?>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
