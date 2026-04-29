<?php
$conn = mysqli_connect("localhost", "root", "", "myapp");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
