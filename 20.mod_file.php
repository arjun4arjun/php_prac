<?php 
$f_append=fopen("myfile.txt", "a") or die("ERROR: method didn't work");
$text_app="\n This file has been appended";
fwrite($f_append, $text_app);
echo "execution successful";
echo "-----Arjun mehrania-----";
fclose($f_append);
?>
