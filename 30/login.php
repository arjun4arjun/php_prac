<?php
session_start();
include "db.php";
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($_POST["password"], $row["password"])) {
        $_SESSION["username"] = $row["username"];
        header("Location: dashboard.php");
        exit();
    } else {
        $msg = "<p class='error'>Invalid username or password.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="box">
    <h2>Login</h2>
    <?php echo $msg; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p style="text-align:center"><a href="register.php">Don't have an account?</a></p>
</div>
</body>
</html>
