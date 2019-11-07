<?php
$fp=fopen("count.txt","r");
$count=fread($fp,10);
fclose($fp);
$count+=1;
echo "<h3> page views: {$count} <h3>";
$fp=fopen("count.txt","w");
fwrite($fp,$count);
fclose($fp);
?>