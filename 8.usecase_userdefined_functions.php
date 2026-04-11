<?php
$text1='Janakpuri';
$text2="Pocket4";

function checksize($x){
return strlen($x);
}
echo "Implementing user defined functions<br>";
function greeting($name="BCA at Maharaja Surajmal Institute"){
    echo "Welcome to $name ";
    echo "\n";
echo "-->  <i>there are ".checksize($name). " letters in the word $name</i><br>";
}
greeting($text2);
greeting($text1);
greeting();
echo "<br>----- Arjun Mehrania -----";
?>
