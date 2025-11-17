

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

        /* Form Styles */
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Input Styles */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        /* Submit Button Styles */
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Logo Styles */
        .logo {
            width: 100px; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px;
            margin-left: 520px;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <img src="1.png" alt="Logo" class="logo">
        <!-- Registration Form -->
        <form action="registered.php" method="post">
            <h2 class="text-center">Register</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password1" name="password1" required>
            </div>
            <div class="form-group">
                <label for="password1">Confirm Password:</label>
                <input type="password" class="form-control" id="password2" name="password2" required>
            </div>
            <!-- New Field for the Additional Column -->
            <!-- <div class="form-group">
                <label for="new_column">New Column:</label>
                <input type="text" class="form-control" id="new_column" name="new_column">
            </div> -->
            <button type="submit" class="btn btn-primary" name="register" value="register">Register</button>
        </form>
    </div>
</body>
</html>
