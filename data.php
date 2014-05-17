<?php



// retrieve account balance
$c = curl_init('https://academics.vit.ac.in/student/home.asp');
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie.txt');
$page = curl_exec($c);
curl_close($c);

echo $page




?>