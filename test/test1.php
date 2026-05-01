<html>
<head><title>Test program</title></head>
<body>
<p><?php echo "local php working"; ?></p>
<!-- input form -->
<form method="POST" enctype="multipart/form-data" action="thirdfile.php">
<h1>Records Modification database</h1>
<p>Enter your name: <input type="text" name="nametxt"></p>
<p>Enter your course: <input type="text" name="coursetxt"> </p>
<p>Which table to insert the data: <input type="text" name="tbltxt"> </p>
<p><input type="submit" name="sbt"></p>

</form>
<hr>


</body>
</html>
