<?php 
    session_start();
    error_reporting(0);
    // if(!$_SESSION['loggedin'])
    // {
    //     header("Location: login.php");
    // }
?>
<html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include the same CSS file used for other pages -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        /* Body Styles */
        body {
            padding-top: 50px; /* Add space for fixed navbar */
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        /* Container Styles */
        .container {
            margin-top: 50px;
            max-width: 500px; /* Limit container width */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Button Styles */
        button {
            margin-top: 20px;
            background: #003366;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #001a33;
        }

        /* Form Styles */
        form {
            margin-top: 20px;
        }

        /* Form Input Styles */
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        /* Logo Styles */
        .logo {
            width: 100px; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
            display: block;
            margin: 0 auto 20px; /* Center horizontally and provide some space below */
        }
    </style>
</head>
<body>
    <!-- Logo -->
    <img src="1.png" alt="Logo" class="logo">

    <div class="container">
        <!-- <button onclick="goBack()" class="btn btn-primary">Go Back</button>
        <a href="about.php" class="btn btn-primary">Main</a> -->
        <h3 class="mt-3">Cancel Booking</h3>
        <form action="bookingdeleted.php" method="post">
        <!-- <form action="search.php" method="post">
        <div class="form-group">
         <input type="text" id="searchInput" name="name" placeholder="Search by Hall Name, Username or booking date" class="form-control"  autofocus>
                <input type="submit" id="name" name="name"></form>
            </div> -->
            <div class="form-group">
                <select name="hall" class="form-control">
                    <option value="ESB Small Seminar Hall">ESB Small Seminar Hall</option>
                    <option value="Seminar Hall1">Seminar Hall1</option>
                <option value="Seminar Hall2">Seminar Hall2</option>
                <option value="Seminar Hall3">Seminar Hall3</option>
                <option value="Seminar Hall4">Seminar Hall4</option>
                <option value="Seminar Hall5">Seminar Hall5</option>
                <option value="Seminar Hall6">Seminar Hall6</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" name="slotdate" class="form-control" required>
            </div>
            <input type="submit" value="Cancel Booking" id="cancel" name="cancel" class="btn btn-primary">
            <a href="about.php">Main Menu</a>
        </form>
    </div>

    <!-- <script>
        function search() {
            var searchInput = document.getElementById('searchInput').value;
            // Perform search based on searchInput
            // You can use AJAX to send the search query to the server and update the page with the search results
        }
            </script> -->
           
</body>
</html>
