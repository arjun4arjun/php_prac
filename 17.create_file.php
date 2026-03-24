<?php
echo "Using file operations to create file named: myfile.txt <br>";
$file_op=fopen("myfile.txt","w") or die("Err: method not working");
$tex="helloworldd";
fwrite($file_op,$tex);
fclose($file_op);
echo "File operation successful";
?>
