<?php
$fn=$_POST["fno"];
$sn=$_POST["sno"];
$s=$fn+$sn;
header("location:calClient1.php?data1=$fn&data2=$sn&res=$s");
?>