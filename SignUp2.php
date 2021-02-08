<?php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["password"];
$d=$_POST["confirmpassword"];
$con=mysqli_connect("localhost","root","","signup");
if(!$con)
die("Server could not connected");
$s="insert into data values('".$a."','".$b."','".$c."')";
$check=mysqli_query($con,$s);
if($check!=0)
echo "Inserted successfully";
else
echo "Unable to store data";

?>



