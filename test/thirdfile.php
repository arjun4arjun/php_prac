<html>
<body>
<form method="POST" action=test1.php>
<button type="submit" name='gobk'>Go Back</button>
</form>
<?php
//Text input by user
echo "<h3>Verify your inputs</h3>";
$name=$_POST["nametxt"];
$Course=$_POST["coursetxt"];
$table=$_POST["tbltxt"];
echo "<br>The Name to be inserted: <b>$name</b>";
echo "<br>The Course to be inserted: <b>$Course</b>";
echo "<br>Chosen table: <b>$table</b>";
?>

<form method="POST">
Do you wish to proceed: <button type="submit" name="btny">Yes</button>&nbsp<button type="submit" name="btnn">NO </button>
<input type="hidden" name="name1" value="<?php echo"$name";?>">
<input type="hidden" name="course1" value="<?php echo "$Course";?>">
<input type="hidden" name="table1" value="<?php echo "$table";?>">
</form>

<?php
//User inputs YES
function viewdb(){
echo "<form method='POST' action='fourthfile.php'>"."<button type='submit' name='viewdb'>View the table</button>"."</form>";

}
function proc_yes($name1,$Course1,$table1){
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
echo $connec->error; 
}
}
if(isset($_POST["btny"])){
viewdb();
proc_yes($name1,$Course1,$table1);
}
elseif(isset($_POST["btnn"])){
echo "No values have been inserted!";
}

?>
</body></html>
