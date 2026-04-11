<?php
$arr=array(10,20,30,40,50,60,70);

echo"<b>--></b> original array is: ";
foreach($arr as $a){
echo"$a ";
}

echo"<br>Using <b>array_slice</b> on the original array: ";
$arr_sliced=array_slice($arr,1,3);
foreach($arr_sliced as $arr_sl){
echo"$arr_sl ";
}

echo"<br>Using <b>array_splice</b> on the original array: ";
$temp=$arr;
array_splice($temp,2,3,array(21,22,23));
foreach($temp as $arr_spl){
echo"$arr_spl ";
}

echo"<br>Using <b>array_pad</b> on the original array: ";
$array_paded=array_pad($arr,10,0);
foreach($array_paded as $arr_pd){
echo "$arr_pd ";
}

echo"<br>Using <b>list method</b> on the original array: ";
list($first,$sec,$three)=$arr;
echo "$first,$sec,$three";
echo "<br>----- Arjun Mehrania -----";
?>
