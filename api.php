<?php

$rand = rand(99,105);
$url = 'https://cdn.jsdelivr.net/gh/LWANGYONG/images/img/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>
