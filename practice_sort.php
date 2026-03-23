<?php
//echo"working";
$i=0;
$arr=array(20,50,40);
rsort($arr);
for($i=0;$i<3;$i++){
echo "$arr[$i]<br>";
}
$cars=array('honda'=>'amaze','hyundai'=>'verna','skoda'=>'virtus','suzuki'=>'victoris','mahindra'=>'BE6E');
asort($cars);
foreach($cars as $key=>$value){
echo "$key : $value, ";
}

?>
