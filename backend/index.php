<?php 
    session_start()
?>
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
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
      }

      /* Navbar Styles */
      .navbar {
        /* margin-bottom: 0; */
      }

      /* Logo Styles */
      .logo {
        width: 100px; /* Adjust size as needed */
        height: auto; /* Maintain aspect ratio */
        margin-left: 640px;
        margin-top: 70px;
      }

      /* Container Styles */
      .container {
        margin-top: 50px;
      }

      /* Button Styles */
      .btn-lg {
        margin-top: 20px;
        background: #003366;
      }

      /* Footer Styles */
      .footer {
        background-color: #f8f8f8;
        padding: 20px 0;
        text-align: center;
      }
    </style>
    <title>Seminar Hall</title>
  </head>
  <body>
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #f8f8f8;"> -->
      <!-- <div class="container"> -->
        <!-- <div class="navbar-header"> -->
          <!-- Centered Logo -->
          <!-- <a class="text-center" href="#"> -->
            <img src="1.png" alt="Logo" class="logo" >
          </a>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container text-center">
      <h2>PESU Seminar Hall Booking</h2>
      <br />
      <h4>To book a hall, please log in!</h4>
      <a href="login.php">
        <button type="button" class="btn btn-warning btn-lg">Log In</button>
      </a>
    </div>
    <!-- New User Register Link -->
    <br><br>
    <div class="container text-center" style="margin-top:-25px ;">
      <a href="register.php" >Register</a>
    </div>

    <!-- Bootstrap JS -->
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
