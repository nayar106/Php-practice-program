<?php
if(isset($_POST["btn"]))
{
 $name=$_POST["txt"];
 setcookie("UserName",$name,time()+3600,"/");
 header("location:firstpage.php");
}

?>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="text" name="txt"><br><br>
<input type="submit" value="Save" name="btn">
</form>
</body>
</html>