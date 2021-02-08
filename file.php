<?php
if(isset($_POST["btn"]))
{
 $name=$_FILES["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"],"image/".$name);
echo "uploaded Successfully";
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
<input type="file" name="img"><br>
<input type="submit" value="Upload" name="btn">
</form>
</body>
</html>