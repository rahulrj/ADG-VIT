<?php

$base = $_REQUEST["image"];

if (isset($base)) {
 

$suffix = createRandomID();
echo 'hello yr';
$image_name = "img_".$suffix."_".date("Y-m-d-H-m-s").".jpg";
echo $image_name;
// base64 encoded utf-8 string
$binary = base64_decode($base);
echo 'anshuljain';
echo $binary;


header("Content-Type: bitmap; charset=utf-8");

$file = fopen("images/" . $image_name, "wb");

fwrite($file, $binary);
echo 'ans';
 fclose($file); 

echo 'finally';
die($image_name);

} else {

die("No POST");
}

function createRandomID() {

$chars = "abcdefghijkmnopqrstuvwxyz0123456789?";
//srand((double) microtime() * 1000000);

$i = 0;

$pass = "";

while ($i <= 5) {

$num = rand() % 33;

$tmp = substr($chars, $num, 1);

$pass = $pass . $tmp;

$i++;
}
return $pass;
}
?>
