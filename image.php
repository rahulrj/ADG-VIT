<?php
header("Content-type: image/*");

$images_folder = "images/";
$image_name = '1.jpg';

$image_url = $images_folder . $image_name;

if (!readfile($image_url))
    echo "Error loading file";
?>