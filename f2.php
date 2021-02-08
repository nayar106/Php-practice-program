<?php
$handle=fopen("myfile.txt",'a');
fwrite($handle,"hello");
fclose($handle);
?>