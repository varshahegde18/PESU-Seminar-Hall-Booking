<?php
    session_start();
    // Check if the user is already logged in
    // if(isset($_SESSION['username'])) {
        // Redirect to another page (e.g., home page)
        // header("Location: login.php");
        // exit; // Stop further execution
    // }
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

      /* Container Styles */
      .container {
        margin-top: 50px;
      }

      /* Form Styles */
      .form-signin {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      /* Input Styles */
      .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
      }

      /* Button Styles */
      .btn-lg {
        margin-top: 20px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
      }

      .btn-lg:hover {
        background: #0056b3;
      }

      /* Form Title Styles */
      .form-signin-heading {
        text-align: center;
        margin-bottom: 20px;
      }

      /* Logo Styles */
      .logo {
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
        width: 150px; /* Adjust size as needed */
      }
    </style>
    <title>Login</title>
</head>
<body>
<div class="container">
    <!-- Logo -->
    <img src="1.png" alt="Logo" class="logo">
	<div class="wrapper">
		<form action="loggedin.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <!-- <hr class="colorgraph"><br> -->
			  <br>
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" id="username" />
			  <input type="password" class="form-control" name="password1" placeholder="Password" required="" id="password1"/>     		  
			 
        <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
		
		</form>			
	</div>
</div>
</body>
</html>
