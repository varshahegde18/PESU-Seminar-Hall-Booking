<?php
session_start();
if(!$_SESSION['loggedin']) {
    header("Location: register.php");
}

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "dbproject";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
// Retrieve the value of the new column from the form
$new_column_value = $_POST['new_column'];

if ($password1 == $password2 && $password1 != "") {
    $sql = "INSERT INTO person (username, user_password) VALUES ('$username', '$password1')";
    if ($conn->query($sql) === TRUE) {
        echo "Registered Successfully";
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
    }
} else {
    echo "Password Mismatch or Empty Password";
    header("Location: register.php");
}

$conn->close();
?>
<html>
<head>
<title>Add User</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="3; URL=about.php">
</head>
</html>
