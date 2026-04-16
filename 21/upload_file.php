<?php
$target_folder="to_upload/";
$target_dir= $target_folder . ($_FILES["filetoupload"]["name"]);
$upload=1;
if(isset($_POST["submit"])){
if(file_exists($target_dir)){
$upload=0;
echo "File already existing, ";
echo "destination of file: $target_dir <br>";
}
else if ($upload==1){
if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_dir)){
echo "File has been uploaded ";
echo "to : $target_dir <br>  ";
}
else {echo "Error uploading file";
echo "<br> Error code: " . $_FILES["filetoupload"]["error"];}

}
}
echo"<br><br> -----Arjun Mehrania-----";

?>
