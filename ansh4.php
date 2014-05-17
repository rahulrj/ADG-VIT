
<?php
define('COOKIE', './cookie.txt');
define('MYURL', 'http://www.iitg.ernet.in/cseweb/summerinternship/logmein');
  $user_id=$_POST['submit'];  
 // $cookie2=$_POST['sessionid'];  
  $cookie2;
  $buffer1;
  echo $user_id;
  $referer3;
  $result3;
  $il=0;
  
function getUrl2($url, $method='', $vars,$cookie2)
{ 
    echo 'in get 2 function';
    echo $cookie2;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    echo 'in get url';
    echo "\n $url";
    echo "\n $method";
    echo "\n $vars";
    echo 'read';
    global $cookie2;
 /*   static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }*/
    echo "\n";
    echo 'displaying in get url';
    echo $cookie2;
      echo $cookie2;
      global $referer3;

    echo 'cookie defintion';
    $referer = 'https://academics.vit.ac.in/parent/parent_login_submit.asp';
 $ch = curl_init();

    echo "\n";
    echo $ch;
   // print(json_encode($ch2));
    echo 'Ch definition';
    if ($method == 'post') {
        echo 'in method';
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    }
    echo '1';
    echo $vars;
    echo 'vars defintion';
   // global $cookie2;
//$cookie2='PHPSESSID=1363859170';    
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
   // curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 5);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie2);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $buffer = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    else
    {
        echo 'success';
    }
    echo '1';
    curl_close($ch);
    
    global $buffer1;
    rahul();
    echo " buffer is \n";
   // echo $buffer;
    echo "anshul jain";
    return $buffer1;
}



function rahul()
{
    
    global $referer3;
    echo"th is function rahul";
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
   // echo 'in get url';
    //echo "\n $url";
    //echo "\n $method";
    //echo "\n $vars";
    //echo 'read';
    global $cookie2;
 /*   static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }*/
    echo "\n";
    echo 'displaying in get url';
    echo $cookie2;
      echo $cookie2;

    echo 'cookie defintion';
    $referer3 = 'https://academics.vit.ac.in/parent/timetable.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();

    echo "\n";
    echo $ch;
   // print(json_encode($ch2));
    echo 'Ch definition';
   /* if ($method == 'post') {
        echo 'in method';
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    }*/
    echo '1';
    //echo $vars;
    echo 'vars defintion';
   // global $cookie2;
//$cookie2='PHPSESSID=1363859170';    
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer3);
   // curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 5);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
     curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_REFERER, $referer1);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie2);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    else
    {
        echo 'success';
    }
    echo '1';
    curl_close($ch);
    
    
//    rahul();
    echo " buffer is \n";
   // echo $buffer;
    echo "anshul jain";
    echo"rahul finished";
    
    
   
    //echo $buffer1;
    
    
}


function rahul2()
{
    
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);

echo "in new rahul";

$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($result3));

$start = strpos($content,'<table cellspacing=0 cellpadding=2 border="1"  width="900" style="border-collapse: collapse" bordercolor="#000000">
');
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 

foreach ($rows[0] as $row){
//echo $row;
echo "rahul";
$hi=strip_tags($row);
//echo"this is {$hi}";

 
    if ((strpos($row,'<th')==false) && (strpos($row,'TIME TABLE')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
		$number = strip_tags($cells[0][0]);
      //  echo $number;
        $values[$il]['key1']=$number;
        echo "values is{$values[$il]['key1']}";
 
		$name = strip_tags($cells[0][1]);
       // echo $name;
       
        $values[$il]['key2']=$name;
         echo "values is{$values[$il]['key2']}";
 
 
		$position = strip_tags($cells[0][2]);
        //echo $position;
        $values[$il]['key3']=$position;
         echo "values is{$values[$il]['key3']}";
 
        $pos=strip_tags($cells[0][3]);
       // echo "{$pos}\n";
 
		//echo "{$position} - {$name} - Number {$number}";
 //echo "<br\n";
	}
    if($il==2)
   break;
   // echo $values[i];
 
    
 
}
   print(json_encode($values));

    
    
    
}

function getUrl($url, $method='', $vars)
{
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $cookie2=$cookie;
    $referer = 'https://academics.vit.ac.in/parent/parent_login.asp';
    $ch = curl_init();

    if ($method == 'post') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    }
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
   // curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 5);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $buffer = curl_exec($ch);
    if (curl_errno($ch)) {
        die;
    }
    else
    {
    }
    curl_close($ch);
    return $buffer;
}


function save_captcha($ch) {
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    $url = "https://academics.vit.ac.in/parent/captcha.asp";
    
    static $cookie = false;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $ch = curl_init();    
    // Initialize a CURL session.
    curl_setopt($ch, CURLOPT_URL, $url);  // Pass URL as parameter.
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Return stream contents.
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); // We'll be returning this
    $data = curl_exec($ch); // // Grab the jpg and save the contents in the
    curl_close($ch);  // close curl resource, and free up system resources.
    $captcha_tmpfile = 'captcha/captcha-' . rand(1000, 10000) . '.jpg';
  
    $fp = fopen($tmpdir . $captcha_tmpfile, 'w');
    fwrite($fp, $data);
    fclose($fp);
      $a= base64_encode(file_get_contents("http://vitadg.in.previewdns.com/".$captcha_tmpfile));
$output['image']=$a;
print(json_encode($output));

    return $captcha_tmpfile;
   }

if (isset($_POST['submit'])) 
{
    $vr=htmlspecialchars($_POST['captcha']);
    $id = "10BCE0123";
    $pw = "14011992";
 


$st="1";
$com="Login";
  $postfields = "wdregno=".$id."&wdpswd=".$pw."&vrfcd=".$vr."&sublogin=".$st."&submit=".$com;

    $url = "https://academics.vit.ac.in/parent/parent_login.asp";
    $result3 = getUrl2($url, 'post', $postfields,$cookie2);
    rahul2();

}
else {

    $open = getUrl('https://academics.vit.ac.in/parent/parent_login.asp', '', '');
    $captcha = save_captcha($ch);
    $fp = fopen('./cookie.txt', 'r');
    $a = fread($fp, filesize('./cookie.txt'));
    fclose($fp);
}
?>




