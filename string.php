<?php

echo strlen("Abhishek")."<br>";
echo strcmp("ICTER","ABHI")."<br>";
echo strcmp("ICT","ABHI")."<br>";
echo str_repeat("=","50")."<br>";
echo str_shuffle("ICT Traning")."<br>";
echo md5("ICT")."<br>";
echo strpos("ICT TRANING","G")."<br>";
echo str_replace("He","hi","Hello Word")."<br>";
print_r(str_split("Abhishek"));
echo "<br>";
print_r(explode(" ","Abhishek Kumar"))."<br>";
$arr=array('Hello','Word','Beautiful','Day');
echo "<br>".implode("*",$arr);
?>