<?php
//this file needs permissions 640
//usleep(100000);//0.10 seconds, can use to slow down if desired
$pageName=basename(__FILE__,".php");
$countFileName=$pageName."-count.txt";
$int=0;
$contents=file_get_contents($countFileName);
$int = (int)$contents;
$int=$int+1;
file_put_contents($countFileName,(string)($int));
include_once($pageName.".html");
echo ("<script>document.getElementById('visit-counter').innerHTML='".$int." visits.'</script>");
?>