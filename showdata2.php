<?php
$n=$_POST["name"];
$con=mysqli_connect("localhost","root","","mydb1");
if(!$con)
die ("Server could not connected");
$s="select Course from std where Name='".$n."'";
$rs=mysqli_query($con,$s);
while($f=mysqli_fetch_assoc($rs))
{
 echo $f["Course"];
 }
?>