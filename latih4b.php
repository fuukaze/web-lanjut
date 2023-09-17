<!DOCTYPE html>
<html>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
Nim<br>
<input type="text" name="nim" id="nim"><br>
Nama<br>
<input type="text" name="nama" id="nama"><br>
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload" required><br>
<input type="submit" value="Upload Image" name="submit">
<br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
echo "NIM : ".$_POST['nim']."<br>Nama : ".$_POST['nama'];
$gbr=$_FILES['fileToUpload']['tmp_name'];
$namafile=$_FILES['fileToUpload']['name'];
$dir="image/$namafile";
move_uploaded_file($gbr,$dir);
echo "<br><img src='".$dir."' width='200' height='200'><br>Fotoku";
}
?>