Welcome
<?php
session_start();
if(isset($_SESSION["UserName"]))
echo $_SESSION["UserName"];
else
header("location:index.php");
?>
<p align="right">
<a href="logout.php">Logout</a>
</p>