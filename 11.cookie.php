<?php
$cook_nam='test1';
$cook_val="test1val";
setcookie($cook_nam,$cook_val, time() + 3600);
if (count($_COOKIE)>0){
echo "cookies detected<br>";
}
else{
echo "no cookies found";}

if(isset($_COOKIE[$cook_nam])){
echo "name of cookie is: $cook_nam and value is $_COOKIE[$cook_nam]";
}
else {
echo "<br>cookie not found";}
echo "<br>----- Arjun Mehrania -----";
?>
