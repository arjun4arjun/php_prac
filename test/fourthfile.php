<html>
<body>
<!-- code for go back button, later depreciated 
<form method="POST" action=test1.php>
<button type="submit" name='gobk'>Go Back</button>
</form>
-->

<?php
//Text input by user
echo "<h3>Verify your inputs</h3>";
echo "The Name to be inserted: <b>$name</b>";
echo "<br>The Course to be inserted: <b>$Course</b>";
echo "<br>Chosen table: <b>$table</b>";

if(isset($_POST["btny"])){
$table1=$_POST["nametxt"];
include("test2.php");
}
elseif(isset($_POST["btnn"])){
echo "No values have been inserted!";
}
?>

<form method="POST" action="">
Do you wish to proceed: <button type="submit" name="btny">Yes</button>&nbsp<button type="submit" name="btnn">NO </button>
</form>
</body></html>
