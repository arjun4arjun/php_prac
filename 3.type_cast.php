<?php

$a = "123.45";   
$b = 10;         
$c = 5.75;       
$d = true;       

echo "Original Values: <br>";
echo "variable A = "; var_dump($a); echo "<br>";
echo "variable B = "; var_dump($b); echo "<br>";
echo "variable C = "; var_dump($c); echo "<br>";
echo "variable D = "; var_dump($d); echo "<br>";

echo "<br>After Type Casting: <br>";

// String to Integer
$int_a = intval ($a);
echo "variable a as integer: $int_a";
echo " - ";
var_dump($int_a);
echo "<br>";

// String to Float
$float_a = floatval ($a);
echo "variable a as float: $float_a";
echo " - ";
var_dump($float_a);
echo "<br>";

// Integer to String
$string_b = strval ($b);
echo "variable b as string: $string_b";
echo " - ";
var_dump($string_b);
echo "<br>";
// Float to Integer
$int_c = (int)$c;
echo "variable c as integer: $int_c";
echo " - ";
var_dump($int_c);
echo "<br>";
// Boolean to Integer
$int_d = (int)$d;
echo "variable d as integer: $int_d";
echo " - ";
var_dump($int_d);
echo "<br>";
// Integer to Boolean
$bool_b = (bool)$b;
echo " variable B as boolean: $bool_b";
echo " - ";
var_dump($bool_b);
echo "<br>";
?>
