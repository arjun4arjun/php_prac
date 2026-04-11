<?php
echo "<h3>Execution starting:::</h3>";
$file_inc='page4.php';
$file_req="page5.php";
include "$file_inc";
echo "name of the car is: $car <br>";
require("$file_req");
echo "model of the car is: $model<br>";
echo"-----Arjun Mehrania-----";
exit ('<h3>Execution halted:::</h3>');
?>
