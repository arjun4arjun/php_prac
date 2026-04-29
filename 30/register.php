<?php
//include "db.php";
$msg = "";
$servername = "127.0.0.1";
$username = "root";
$password = "redwood";

$conn = new mysqli($servername, $username, $password);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $result = $conn->query("INSERT INTO users VALUES('$user', '$pass')");

    if ($result) {
        $msg = "<p class='success'>Registered! <a href='login.php'>Login</a></p>";
    } else {
        $msg = "<p class='error'>Username already exists.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="box">
    <h2>Register</h2>
    <?php echo $msg; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <p style="text-align:center"><a href="login.php">Already have an account?</a></p>
</div>
</body>
</html>
