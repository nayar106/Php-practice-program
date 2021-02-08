<?php
$a=$_POST["name"];
$b=$_POST["fees"];
$c=$_POST["password"];
$d=$_POST["gen"];
$e=$_POST["country"];
$f=$_POST["qul"];
$g=$_POST["address"];
$chk="";
foreach($f as $chk1)
{
 $chk .= $chk1.",";
}
$con=mysqli_connect("localhost","root","","signup");
if(!$con)
die("server could not connected");
$s="insert into data values('".$a."','".$b."','".$c."','".$d."','".$e."','".$chk."','".$g."')";
$check=mysqli_query($con,$s);
if($check!=0)
echo"inserted successfully";
else
echo"unable to insert";
?>
