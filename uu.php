<?php
$urltopost = "https://www.google.com/a/vit.ac.in/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/a/vit.ac.in/&ss=1&ltmpl=default&ltmplcache=2";
$datatopost = array ("Email" => "punnetkumar.garg2010","Passwd" => "NAMA1234");

 $ch = curl_init ($urltopost);
curl_setopt ($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$returndata = curl_exec ($ch);
echo $returndata;
curl_close($ch);
?>