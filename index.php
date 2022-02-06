<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$blkberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $webos || $ipod || $blkberry == true)
{
   header('Location:Mobile/index.html');
}
else {
   header('Location:index.html');
}
?>
