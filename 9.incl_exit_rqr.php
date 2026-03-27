<?php
echo "<h3>Execution starting:::</h3>";
$f_name="page3.php";
include("pagedfrw.php");
echo "file named as $f_name included successfully <br><br>";
require("page2.php");
echo "Halting the program::: <br>";
exit("Exit called. Program terminated.<br>");
echo "This line will NOT execute<br>";
echo "<b>Using die():</b><br>";
die("Die called. Program terminated.<br>");
echo "This line will also NOT execute<br>";
echo "<h3>Main Page End</h3>";
?>
