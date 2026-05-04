<html>
<body>
<?php
$name1=$_POST["name1"];
$Course1=$_POST["course1"];
$table1=$_POST["table1"];
$text="hie";
echo "file 5 included";
echo "$name1 $Course1 $text $table1";
function proc_yes($name1,$Course1,$table1){
$srvr="127.0.0.1";
$usr="root";
$pss="redwood";
$connec=new mysqli($srvr,$usr,$pss, "records");
if($connec->connect_error){
echo "Error: ".$connec->connect_error;
}
if($connec->query("Insert into $table1 values('$name1','$Course1');")){
//$connec->query("Insert into $table1 values('$name1','$Course1');");
echo "Values have been inserted into table $table1";
}
else{
echo $connec->error; 
}
}
proc_yes($name1,$Course1,$table1);
?>
</body>
</html>
