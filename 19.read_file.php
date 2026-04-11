<?php
echo "Using fread() method to read contents of file:";
$f_read=fopen("myfile.txt", "r") or die("<br>ERR: method not working");
$f_data=fread($f_read, filesize("myfile.txt"));
echo "<br>Content: $f_data";
//echo fread($f_read,filesize("myfile.txt"));
fclose($f_read);
echo "<br>-----Arjun Mehrania-----";
?> 
