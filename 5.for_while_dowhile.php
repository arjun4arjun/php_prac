<?PHP

$int=10;
echo"<b>-> using for loop</b>: We have a number $int which will keep printing unless it becomes 15 <br>";
for($i=$int;$i<=15;$i++){
echo "$i ";
}

echo"<br><b>-> using while loop:</b> We have an integer $int1 which should increment and print itself until value becomes 40 <br>";
$int1=35;
while($int1 !=41){
echo "$int1 ";
$int1 ++;
}

echo "<br><b>-> using do-while loop:</b> We store $int2 in variable int which will keep printing until it becomes equal to 100<br>";
$int2=91;
do{
echo "$int2 ";
$int2 ++;
}while($int2 <= 100);

echo"<br><i>-> using do while loop:</i> do while loop will execute once at minimmum even if condition is false.<br>";
$int3=77;
echo"Ex- if $int3 is more than $int2, we will print it's value below:<br> ";
do{
echo "$int3";
}while($int3 > $int2);

?>
