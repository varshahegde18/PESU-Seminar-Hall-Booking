<?php
session_start();



if(isset($_POST['login'])) {
    // Retrieve username and password from the form
    $u_name = $_POST['username'];
    $u_password = $_POST['password1'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbproject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query (assuming user_password is stored as plaintext, not recommended)
    $stmt = "SELECT * FROM person WHERE username='$u_name' AND user_password='$u_password'";
    $result = $conn->query($stmt);

    // Check if a matching user is found
    if ($result->num_rows > 0) {
        // Fetch user row
        $row = $result->fetch_assoc();
        $u_id = $row['id'];

        // Set necessary session variables
        $_SESSION['username'] = $u_name;
        $_SESSION['s_id'] = $u_id;

        // Display JavaScript alert message for successful login
        echo "<script>alert('Login successful!'); window.location.href='about.php';</script>";
        exit;
    } else {
        // Display JavaScript alert message for unsuccessful login
        echo "<script>alert('Login unsuccessful. Please try again.'); window.location.href='login.php';</script>";
        exit;
    }

    // Close connection
    $conn->close();
}
?>
