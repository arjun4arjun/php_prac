<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "1234") {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials input";
    }
}
?>
<form method="post">
    Username of the user:  <input type="text" name="username"><br>
    Secured password:  <input type="password" name="password"><br>
    <input type="submit" value="Access dashboard">
</form>
<?php echo "----- Arjun Mehrania -----"; ?>
