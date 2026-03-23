<?php
$a=10;
$b=20;
$c=3;
echo "-> this program checks for the largest numbers out of three given: <br>";
echo"-> given that: a=$a , b=$b , c=$c <br><br>";

if ($b > $a){
    if ($b > $c){
        echo "$b is largest";}
    else {
        echo "$c is largest";
    }
}   
else {
    if ($a > $c){
        echo "$a is largest";
    }
}

?>
