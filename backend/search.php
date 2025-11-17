<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
   // header("Location: login.php");
    exit;
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

    // Retrieve the search query from the form
    $searchInput = $_POST["searchInput"];

    // Perform the search query
    // You need to modify this query according to your database schema
    $sql = "SELECT * FROM schedule WHERE hall_name LIKE '%$searchInput%' OR person_name LIKE '%$searchInput%' OR slot_date LIKE '%$searchInput%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Hall Name: " . $row["hall_name"]. " - Username: " . $row["username"]. " - Booking Date: " . $row["booking_date"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
}
?>
