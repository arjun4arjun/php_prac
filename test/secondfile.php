<html>
<body>

<form method="POST">
Do you wish to proceed: <button type="submit" name="btny">Yes</button>&nbsp<button type="submit" name="btnn">NO </button>
<input type="hidden" name="name1" value="<?php echo"$name";?>">
<input type="hidden" name="course1" value="<?php echo "$Course";?>">
<input type="hidden" name="table1" value="<?php echo "$table";?>">
</form>;

<?php
$name1=$_POST["name1"];
$Course1=$_POST["course1"];
$table1=$_POST["table1"];
$connec=new mysqli($srvr,$usr,$pss, "records");

//function if user wants to proceed inserting data
function proc_yes($name1,$Course1,$table1,$connec){
$srvr="127.0.0.1";
$usr="root";
$pss="redwood";
if($connec->connect_error){
echo "Error: ".$connec->connect_error;
}
if($connec->query("Insert into $table1 values('$name1','$Course1');")){
//$connec->query("Insert into $table1 values('$name1','$Course1');");
echo "Values have been inserted into table $table1";
}
else{
echo "Error: ". $connec->error; 
}
}
if(isset($_POST["btny"])){
proc_yes($name1,$Course1,$table1,$connec);
}

// If user chose Not to insert values
elseif(isset($_POST["btnn"])){
echo "No values have been inserted!";
}
?>  
</body></html>
