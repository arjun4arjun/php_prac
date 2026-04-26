<?php
$srvr="127.0.0.1";
$user="root";
$pass="redwood";
$connecting=new mysqli($srvr,$user,$pass,"records");
if($connecting -> connect_error){
echo "Erorr: ".$connecting -> connect_error;
}
else if($connecting){
echo"connection established successfully";
if(isset($_POST["nametxt"])){
$course_form=$_POST["coursetxt"];
$name_form=$_POST["nametxt"];
echo "POST ACCESSED<br>";
$q1="use records;";
$q2="Create table student(Name varchar(10), Course varchar(10))";
$q3="Insert into student values('$name_form','$course_form')";
//$connecting->query($q1);
//$connecting->query($q2);
//$connecting->query($q3);
if($connecting->query($q3)){
        echo "Record inserted successfully<br>";
    } else {
        echo "Error: " . $connecting->error;
    }}
}
?>
