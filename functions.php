<?php
function LoadCURLPage($url, $agent='', $cookie='', $referer='', $post_fields='', $ssl = '')
{
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, $url);

if($ssl) curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);

curl_setopt ($ch, CURLOPT_HEADER, 0);

if($agent) curl_setopt($ch, CURLOPT_USERAGENT, $agent);

if($post_fields)
{
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
}

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

if($referer) curl_setopt($ch, CURLOPT_REFERER, $referer);

if($cookie)
{
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
}

$result = curl_exec ($ch);

curl_close ($ch);

return $result;
}

function extract_unit($string, $start, $end)  
{  
$pos = stripos($string, $start);  
  
$str = substr($string, $pos);  
  
$str_two = substr($str, strlen($start));  
  
$second_pos = stripos($str_two, $end);  
  
$str_three = substr($str_two, 0, $second_pos);  
 
$unit = trim($str_three); // remove whitespaces  

return $unit;  
} 
?>