<?php
session_start();
echo "-----Arjun Mehrania-----";
$adminUser = "admin"; $adminPass = "admin123";
$message = "";
if (isset($_POST['login'])) {
    $user = $_POST['username']; $pass = $_POST['password'];
    if ($user == $adminUser && $pass == $adminPass) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name']     = "Arjun";
        $message = "Login done successfully Welcome, Arjun.";
    } else { $message = "Invalid username or password, try agian"; }
}
if (isset($_POST['logout'])) {
    session_unset(); session_destroy();
    $message = "You have been logged out successfully";
}
?>
<!DOCTYPE html><html><head><title>Admin Login/Logout</title></head><body>
<h2>Login / Logout programme ---Arjun---</h2>
<?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
    <h3>Welcome, <?php echo $_SESSION['admin_name']; ?>!</h3>
    <p>Logged in as Admin</p>
    <form method="post"><input type="submit" name="logout" value="Logout as Admin"></form>
<?php else: ?>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
<?php endif; ?>
<p style="color:green;"><strong><?php echo $message; ?></strong></p>
</body></html>
