<?php
$p=3050;
if($p>1000)
{
 $d= $p-(($p*10)/100);
 echo "Paid amount=$d";
 }
else if($p>2000)
{
 $d-(($p*20)/100);
 echo "Paid amount=$d";
 }
else if($p>3000)
{
 $d-(($p*30)/100);
 echo "Paid amount=$d";
 }
else if($p>4000)
{
 $d-(($p*40)/100);
 echo "Paid amount=$d";
 }
?>