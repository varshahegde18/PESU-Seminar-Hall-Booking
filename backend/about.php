

<html>
<head>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous"
    />
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

        /* Nav Pills Styles */
        .nav-pills {
            border-bottom: none; /* Remove border line between navbar and list items */
        }

        .nav-pills li {
            margin-right: 10px;
        }

        /* Logo Styles */
        .logo {
            width: 120px; /* Adjust size as needed */
            display: block;
            margin: 0 auto;
            /* margin-bottom: 100px; */
            margin-bottom: 100px;
        }

        /* Active link Styles */
        .nav-pills > li.active > a,
        .nav-pills > li.active > a:hover,
        .nav-pills > li.active > a:focus {
            background-color: #007bff; /* Active link background color */
            color: #ffffff; /* White text color for active link */
        }

        .nav-pills > li > a:hover,
        .nav-pills > li > a:focus {
            background-color: #f8f9fa; /* Hovered link background color */
            color: #343a40; /* Dark text color for hovered link */
        }
    </style>
    <title>About</title>
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
<!-- <div class="container" style="margin-top: 100px;">
    <ul class="nav nav-pills">
        <li role="presentation" class="active"> <form action="listhalls.php" method="post"><button type="submit" id="halls" name="halls" class="btn btn-link">Halls</button></form></li>
        <li role="presentation"><form action="listhalls.php" method="post"><button class="btn btn-link" onclick="window.location.href='listschedule.php'">Schedule</button></form></li>
        <li role="presentation"><form action="listhalls.php" method="post"><button class="btn btn-link" onclick="window.location.href='bookhall.php'">Book Hall</button></form></li>
        <li role="presentation"><form action="listhalls.php" method="post"><button class="btn btn-link" onclick="window.location.href='deletebooking.php'">Cancel Booking</button></form></li>
        <li role="presentation"><form action="listhalls.php" method="post"><button class="btn btn-link" onclick="window.location.href='updatebooking.php'">Update Booking</button></form></li>
        <li role="presentation"><form action="listhalls.php" method="post"><button class="btn btn-link" onclick="window.location.href='logout.php'">Log out</button></form></li>
    </ul>
</div> -->

 <!-- Main Content -->
 <div class="container" style="margin-top: 100px;">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="listhalls.php">Halls</a></li>
            <li role="presentation"><a href="listschedule.php">Schedule</a></li>
            <li role="presentation"><a href="bookhall.php">Book Hall</a></li>
            <li role="presentation"><a href="deletebooking.php">Cancel Booking</a></li>
            <li role="presentation"><a href="updatebooking.php">Update Booking</a></li>
            <li role="presentation"><a href="logout.php">Log out</a></li>
        </ul>
    </div>

</body>
</html>

