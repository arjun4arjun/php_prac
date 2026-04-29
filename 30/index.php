<?php
session_start();

$conn = new mysqli("127.0.0.1", "root", "redwood", "myapp");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$msg = "";
$page = isset($_GET["page"]) ? $_GET["page"] : "login";

if (isset($_POST["register"])) {

    $user = $_POST["username"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $result = $conn->query("INSERT INTO users (username, password) VALUES ('$user', '$pass')");

    if ($result) {
        $msg = "<p class='success'>Registered Successfully! Please login.</p>";
        $page = "login";
    } else {
        $msg = "<p class='error'>" . $conn->error . "</p>";
        $page = "register";
    }
}

if (isset($_POST["login"])) {

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE username='$user'");

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        if (password_verify($pass, $row["password"])) {

            $_SESSION["username"] = $user;
            header("Location: index.php?page=dashboard");
            exit();

        } else {
            $msg = "<p class='error'>Wrong Password.</p>";
            $page = "login";
        }

    } else {
        $msg = "<p class='error'>User not found.</p>";
        $page = "login";
    }
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php?page=login");
    exit();
}

if ($page == "dashboard" && !isset($_SESSION["username"])) {
    $page = "login";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>User Login System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

<?php if ($page == "register"): ?>

<h2>Register</h2>

<?php echo $msg; ?>

<form method="POST" action="index.php">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="register">Register</button>
</form>

<p><a href="index.php?page=login">Already have an account?</a></p>

<?php elseif ($page == "dashboard"): ?>

<h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>

<p>You are logged in successfully.</p>

<a class="logout" href="index.php?logout=1">Log Out</a>

<?php else: ?>

<h2>Login</h2>

<?php echo $msg; ?>

<form method="POST" action="index.php">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
</form>

<p><a href="index.php?page=register">Don't have an account?</a></p>

<?php endif; ?>

</div>

</body>
</html>

<?php
$conn->close();
?>
