<?php
session_start();
// if(!$_SESSION['halls']) {
//     header("Location: listhalls.php");
// }

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "dbproject";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM halls";

$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Body Styles */
        body {
            padding-top: 50px; /* Add space for fixed navbar */
            background-color: #f8f9fa; /* Light gray background */
            font-family: Arial, sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: transparent; /* Transparent navbar background */
            border: none;
        }

        .navbar-brand {
            color: #343a40; /* Dark text color for navbar brand */
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav li a {
            color: #343a40; /* Dark text color for navbar links */
        }

        /* Container Styles */
        .container {
            margin-top: 20px; /* Reduce margin top */
        }

        /* Logo Styles */
        .logo {
            width: 120px; /* Adjust size as needed */
            display: block;
            margin: 0 auto;
            margin-bottom: 100px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #dee2e6; /* Dark gray border */
            margin-bottom: 20px;margin-top: 10px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6; /* Light gray border between rows */
        }

        th {
            background-color: #f8f9fa; /* Light gray background for header row */
        }

        /* Button Styles */
        button {
            margin-bottom: 20px;
            background-color: #007bff; /* Blue button background */
            color: #fff; /* White text color */
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Link Styles */
        a {
            color: #007bff; /* Blue link color */
        }

        a:hover {
            color: #0056b3; /* Darker blue on hover */
            text-decoration: none; /* Remove underline on hover */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Centered Logo -->
                <a class="navbar-brand" href="#">
                    <img src="1.png" alt="Logo" class="logo">
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" style="margin-top: 50px;">
        <!-- <button onclick="goBack()">Go Back</button> -->
        <p><a href="about.php">Main</a></p>
        <!-- <script>
            function goBack() {
                window.history.back();
            }
        </script> -->
        <table border="2"> 
            <?php 
                if ($result->num_rows > 0) { ?>
                    <tr>
                        <th>Hall_Id</th>
                        <th>Hall_name</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                    <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["location"] ?></td>
                            <td><?php echo $row["capacity"] ?></td>
                        </tr>
                    <?php } ?>
                <?php } else {
                    echo "0 results";
                } ?>
        </table>
    </div>
</body>
</html>

<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
