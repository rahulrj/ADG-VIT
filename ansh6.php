<?php
define('COOKIE', './cookie2222.txt');


  $user_id=$_POST['submit'];  
  $buffer1;
  $referer3;
  $result3;
  $il=0;
  

$vr=htmlspecialchars($_POST['captcha']);
    $id = "10BCE0123";
    $pw = "14011992";



$st="1";
$com="Login";
  $postfields = "wdregno=".$id."&wdpswd=".$pw."&vrfcd=".$vr."&sublogin=".$st."&submit=".$com;
//$postfields= $postData = array( 'message'=>'','wdregno'=>$id, 'wdpswd'=>$pw,'vrfcd'=>$user_id,'submit'=>'Login' );

   echo $postfields;
   echo "checked";
    $url = "https://academics.vit.ac.in/parent/parent_login.asp";
    echo $cookie2;
    $result3 = getUrl2($url, 'post', $postfields,$cookie2);
    echo $result3;
    rahul2();
    
    function getUrl2($url, $method='', $vars,$cookie2)
{ 
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    //global $cookie2;
      global $referer3;

    $referer = 'https://academics.vit.ac.in/parent/parent_login_submit.asp';
 $ch = curl_init();

    if ($method == 'post') {
        echo 'in method';
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    }
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
   // curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
    curl_setopt($ch, CURLOPT_USERAGENT, $agents);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 5);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
   // curl_setopt($ch, CURLOPT_COOKIE, $cookie2);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $buffer = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    global $buffer1;
    rahul();
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
global $cookie;
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
    global $cookie;
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



?>
