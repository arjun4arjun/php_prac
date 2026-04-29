<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="box">
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <p style="text-align:center">You are logged in.</p>
    <a class="logout" href="logout.php">Log Out</a>
</div>
</body>
</html>
