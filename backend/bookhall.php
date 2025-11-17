<?php 
    session_start();
    // if(!$_SESSION['login']) {
    //     header("Location: login.php");
    //     exit; // Stop further execution
    // }
?>

<html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        /* Body Styles */
        body {
            padding-top: 50px; /* Add space for fixed navbar */
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        /* Container Styles */
        .container {
            max-width: 500px; /* Reduced container width */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Button Styles */
        .btn-go-back {
            margin-bottom: 10px;
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
    <!-- <button class="btn btn-primary btn-go-back" onclick="goBack()">Go Back</button> -->

   
    <h3 class="mt-3">Book Hall</h3>

    <form action="addbooking.php" method="post">
        <div class="form-group">
            <label for="hall">Hall:</label>
            <select name="hall" class="form-control">
                <option value="Seminar Hall1">Seminar Hall1</option>
                <option value="Seminar Hall2">Seminar Hall2</option>
                <option value="Seminar Hall3">Seminar Hall3</option>
                <option value="Seminar Hall4">Seminar Hall4</option>
                <option value="Seminar Hall5">Seminar Hall5</option>
                <option value="Seminar Hall6">Seminar Hall6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="slotdate">Date:</label>
            <input type="date" name="slotdate" class="form-control">
        </div>
        <div class="form-group">
            <label for="starttime">Start Time:</label>
            <input type="time" name="starttime" class="form-control">
        </div>
        <div class="form-group">
            <label for="endtime">End Time:</label>
            <input type="time" name="endtime" class="form-control">
        </div>
        <!-- Add hidden input field to store username -->
        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
        <input type="submit" class="btn btn-primary" id="bookhall" name="bookhall">
        <a href="about.php">Main Menu</a>
    </form>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
