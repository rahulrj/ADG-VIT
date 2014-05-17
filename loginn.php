<?php
$username="anshul.jain010@gmail.com"; 
$password="Myf@mil3"; 
$sin="Sign in";
$cont="https://mail.google.com/mail/";
$serv="mail";
$r="false";
$d="-2843739972594417256";
$ltm="default";
$sc="1";
$ga="davHJu9gHSI";
$pst="0";
$chk="";
$chkdom="youtube";
$timestm='';
$sec='';
$utf="&#9731;";
$bg="js_disabled";
$persis="yes";
$rmsh="1";
$dn="";




$url="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2"; 
$cookie="cookie.txt";
$url2 = "https://jiltapp.com/shops/shopname/orders";

$postdata = "Email=".$username."&Passwd=".$password."&signIn=".$sin."&continue=".$cont."&service=".$serv."&rm=".$r."&dsh=".$d."&ltmpl=".$ltm."&scc=".$sc."&GALX=".$ga."&pstMsg=".$pst."&checkConnection=".$chk."&checkedDomains=".$chkdom."&timeStmp=".$timestm."&secTok=".$sec."&_utf8=".$utf."&bgresponse=".$bg."&PersistentCookie=".$persis."&rmShown=".$rmsh."&dnConn=".$dn;

$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($ch,CURLOPT_COOKIESESSION,false);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $url); 

curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$result = curl_exec ($ch); 

echo $result;  
curl_close($ch);

?>