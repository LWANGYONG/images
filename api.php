<?php

$rand = rand(91,105);
$url = 'https://cdn.jsdelivr.net/gh/LWANGYONG/images/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: img/jpg;");
echo $img;
?>
