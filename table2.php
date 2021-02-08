<?php
$n=$_POST["txt"];
echo "<table align='center' style='border:2px solid black; background-color:#EDB598;padding:10px 30px;'>";
echo "<caption style='font-size:20px;background-color:#7689DF;border:2px solid black;'>Table Of: $n</caption>";
for($i=1;$i<=10;$i++)
{
 $m=$n*$i;
 echo "<tr><td>$n*$i</td><td>=</td><td>$m</td><tr>";
}
?>