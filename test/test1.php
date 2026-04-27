<html>
<head><title>Test program</title></head>
<body>
<p><?php echo "local php working"; ?></p>
<form method="POST" enctype="multipart/form-data">

<h1>Records Modification database</h1>
<p>Enter your name: <input type="text" name="nametxt"></p>
<p>Enter your course: <input type="text" name="coursetxt"> </p>
<p>Which table to insert the data: <input type="text" name="tbltxt"> </p>
<p><input type="submit" name="sbt"></p>
</form>
<hr>
<h3>Verify your inputs</h3>

<?php 
$name=$_POST["nametxt"];
$Course=$_POST["coursetxt"];
$table=$_POST["tbltxt"];
$srvr="127.0.0.1";
$usr="root";
$pss="redwood";
$connec=new mysqli($srvr,$usr,$pss, "records");
echo "The Name to be inserted: <b>$name</b>";
echo "<br>The Course to be inserted: <b>$Course</b>";
echo "<br>Chosen table: <b>$table</b>";
if ($connec){
echo "<h4>Connection to mysql established!</h4>";
$connec->query("CREATE table if not exists $table (Name varchar(10), Course varchar(10));");
}
elseif($connec->connect_error){
echo "Error: ".connect_error;
}
mysqli_close($connec);
?>
<form method="POST">
Do you wish to proceed: <button type="submit" name="btny">Yes</button>&nbsp<button type="submit" name="btnn">NO </button>
<input type="hidden" name="name1" value="<?php echo"$name";?>">
<input type="hidden" name="course1" value="<?php echo "$Course";?>">
<input type="hidden" name="table1" value="<?php echo "$table";?>">
</form>

<?php 
if(isset($_POST["btny"])){
$srvr="127.0.0.1";
$usr="root";
$pss="redwood";
$name1=$_POST["name1"];
$Course1=$_POST["course1"];
$table1=$_POST["table1"];
$connec=new mysqli($srvr,$usr,$pss, "records");
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
elseif(isset($_POST["btnn"])){
echo "No values have been inserted!";
}
?>

</body>
</html>
