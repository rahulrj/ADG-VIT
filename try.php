<?php
$image = 'http://vitadg.in.previewdns.com/images/1.jpg'; 
$content = file_get_contents($image); 
header('Content-Type: image/jpg');
echo $content; exit();
?>