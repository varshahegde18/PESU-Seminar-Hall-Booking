<?php
session_start();

if(!isset($_POST['register'])) {
    // Redirect if the user is not registered
    header("Location: register.php");
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

    // Retrieve form data
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
   
    // Check if the passwords match
    if ($password1 !== $password2) {
        echo "<script>alert('Error: Passwords do not match');</script>";
    } else {
        // Prepare SQL query to insert new user
        $sql_register = "INSERT INTO person (username,user_password) VALUES ('$username', '$password1')";
        
        // Execute the query
        if ($conn->query($sql_register) === TRUE) {
            // Redirect to login page after successful registration
            echo "<script>alert('New user registered!'); window.location.href = 'login.php';</script>";
            exit;
        } else {
            echo "Error: " . $sql_register . "<br>" . $conn->error;
        }
    }

    // Close the connection
    $conn->close();
}
?>
