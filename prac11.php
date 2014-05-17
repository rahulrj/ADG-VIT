<?php
$username="rahul.110392@gmail.com"; 
$password="picturePERFECT"; 
$url="https://www.jiltapp.com/sessions";
//$cookie="cookie.txt";
//$url2 = "https://jiltapp.com/shops/shopname/ord";
$com="Log in";

//$postdata = "email=".$username."&password=".$password;
//$url="https://academics.vit.ac.in/parent/parent_login.asp"; 
$cookie="cookie.txt";
$url2 = "https://jiltapp.com/shops/shopname/orders";
$com="Log in";

//$postdata = "email=".$username."&password=".$password."&commit=".$com;
//$postdata = array( 'message'=>'','wdregno'=>'10bce0096', 'wdpswd'=>'11031992','vrfcd'=>$veri,'submit'=>'Login' );

$postdata = array( 'email'=>$username, 'password'=>$password,'commit'=>$com );


$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookie);  // <-- add this line
curl_setopt ($ch, CURLOPT_REFERER, $url); 

curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$result = curl_exec ($ch); 

echo $result;  

// make second request


?>