<?php 
    session_destroy();
?>
<html>
<head>
    <title>Logged out</title>
</head>
<body>
    <p>Logged out successfully</p>
    <script>
        alert("Logged out successfully");
        window.location.href = "index.php"; // Redirect to index.php
    </script>
</body>
</html>
