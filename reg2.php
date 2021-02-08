<?php
$n=$_REQUEST["name"];
$c=$_REQUEST["course"];
$con=mysqli_connect("localhost","root","","mydb1");
if(!$con)
die("Server could not connected");
$s="insert into std values('".$n."','".$c."')";
$check=mysqli_query($con,$s);
if($check!=0)
echo "Inserted successfully";
else
echo "unable to store";
?>