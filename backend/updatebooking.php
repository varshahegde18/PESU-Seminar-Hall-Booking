
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
        input[type="time"],
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
        <!-- <button onclick="goBack()">Go Back</button> -->
        
        <h3 class="mt-3">Update Booking</h3>
        <form action="bookingupdated.php" method="post">
            <div class="form-group">Select Hall
                <select name="hall" class="form-control">
                    <option value="ESB Small Seminar Hall">ESB Small Seminar Hall</option>
                    <option value="ESB Big Seminar Hall">ESB Big Seminar Hall</option>
                    <option value="DES Hi-tech Seminar Hall">DES Hi-tech Seminar Hall</option>
                    <option value="LHC Seminar Hall 1">LHC Seminar Hall 1</option>
                    <option value="LHC Seminar Hall 2">LHC Seminar Hall 2</option>
                    <option value="Apex Seminar Hall">Apex Seminar Hall</option>
                </select>
            </div>
            <div class="form-group">
               Enter Date <input type="date" name="slotdate" class="form-control" required>
            </div>
            <div class="form-group">
                Start time<input type="time" name="starttime" class="form-control" required>
            </div>
            <div class="form-group">
              End time  <input type="time" name="endtime" class="form-control" required>
            </div>
            <!-- <div class="form-group">
                <input type="time" name="new_starttime" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="time" name="new_endtime" class="form-control" required>
            </div> -->
            <input type="submit" value="Update Booking" class="btn btn-primary" id="update" name="update">
            <a href="about.php" >Main Menu</a>
        </form>
    </div>

    <!-- <script>
        function goBack() {
            window.history.back();
        }
    </script> -->
</body>
</html>
