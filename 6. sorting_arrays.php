<?php

$i=0;
$gaddi=array('porsche','bentley','mclaren','pagani');
echo "Original array<br>";
print_r($gaddi);
echo "<br>-------------------";
sort($gaddi);

    echo"<br><br>sorting the arrays alphabetically :<br>";
for($i=0; $i<4;$i++){
    echo "$i: $gaddi[$i] <br>";
    }
    
echo "-------------------- <br><br>";

rsort($gaddi);
echo"sorting the arrays alphabetically reversed<br>";
for($i=0; $i<4;$i++){
    echo "$i: $gaddi[$i] <br>";
}

echo "--------------------<br><br>";

$keemat= array('porsche'=>'2', "bentley"=>"7", 'mercedes'=>'1', "pagani"=>"10");

echo "sorting the arrays by their values (ascending)<br>";
asort($keemat);
foreach($keemat as $model=>$model_price){
    echo "$model is priced at: ₹$model_price crore <br>";
}

echo "-------------------- <br><br>";

ksort($keemat);
echo"sorting arrays by their values (descending)<br>";
foreach($keemat as $model=>$model_price){
    echo "$model is priced at: ₹$model_price crore <br>";
}
echo"-------------------- -------------------- ";
echo "----- Arjun Mehrania -----";
?>
