 
<?php
 
 //$cookie="./cookie.txt";
 
function open($url)
{
    $ch = curl_init();
    
    $cook=session_name().'='.time();
    //echo $cook;
    
   
    curl_setopt($ch, CURLOPT_URL,$url);  
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070219 Firefox/2.0.0.2');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIE, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt');
    //    curl_setopt($ch, CURLOPT_COOKIE,$cook);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
    curl_setopt ($ch, CURLOPT_REFERER, $url);
    $result = curl_exec($ch);  
    
 
    curl_close($ch);
    
  
 // echo $cook;
    return $result;
    
    
}

 
function between($string, $start, $end)
{
    $out    = explode($start, $string);
   
    if(isset($out[1]))
    {
        $string = explode($end, $out[1]);
        echo $string[0];
        return $string[0];
    }
   
    return '';
}
 
function get_captcha()
{
    $url    = 'https://academics.vit.ac.in/parent/parent_login.asp';
   
    $open   = open($url);
   
    $code   = between($open, '<img src="https://academics.vit.ac.in/parent/captcha.asp', '">');
    
   // echo 'https://academics.vit.ac.in/student/captcha.asp' . $code;
   
    return 'https://academics.vit.ac.in/parent/captcha.asp' . $code;
   //return ;

}


function rahul()
{
    $capth=htmlspecialchars($_POST['code']);
    
    echo $capth;
    
    $username="10bce0096"; 
$password="11031992"; 
$url="https://academics.vit.ac.in/parent/parent_login_submit.asp"; 
//$cookie="cookie.txt";
$veri=$capth;
//$url2 = "https://jiltapp.com/shops/shopname/orders";
$com="Login";
$st="";
echo $veri;


//$postData = array( 'message'=>'','wdregno'=>'10bce0096', 'wdpswd'=>'11031992','vrfcd'=>$veri,'submit'=>'Login' );

// $postfields = "user=".$username."&pass=".$password."&code=".$_POST['captcha']."&sublogin=".$st."&submit=".$com;
$postdata = "wdregno=".$username."&wdpswd=".$password."&vrfcd=".$veri."&message=".$st."&submit=".$com;

$ch = curl_init(); 


  
    
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
//$fp = fopen('./cookie.txt', 'w');
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); 
curl_setopt ($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIE,$cook);// <-- add this line

// curl_setopt($ch, CURLOPT_FILE, $fp); 
curl_setopt ($ch, CURLOPT_REFERER, $url); 

curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 

curl_setopt ($ch, CURLOPT_POST, 1); 
echo "data posted";


$result = curl_exec ($ch); 

echo $result;  

echo $cook;

//$data = curl_exec($ch);

}


 
 
?>


 <html>
 <body>
<form action="" method="post">
<img src="<?php echo get_captcha(); ?>" border="0" /><br />
<input type="text" name="code" value="<?= isset($_POST['code']) ? htmlspecialchars($_POST['code']) : '' ?>" /><br />
<input type="submit" name="submit" value="submit"/>
</form>

<?php


if(isset($_POST['submit'])) {
 echo"tahul";
 rahul();
}
?>
</body>
</html>







 