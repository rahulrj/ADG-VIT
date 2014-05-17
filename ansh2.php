
<?php
define('COOKIE', './cookie.txt');
define('MYURL', 'http://www.iitg.ernet.in/cseweb/summerinternship/logmein');
$a='34';
echo $a;
$b=$a;
echo"rahul is graet";
echo $b;
  $user_id=$_POST['submit'];  
 // $cookie2=$_POST['sessionid'];  
  echo "displaying session id yr \n";
 // echo $cookie2;
  $cookie2;
  $buffer1;
  echo $user_id;
  $referer3;
  $result3;
  $il=0;
  $cookie=false;
  $attnd;
  $mk=0;
  
  echo"the cokies is {$cookie}";
 
  
function getUrl2($url, $method='', $vars,$cookie2)
{ 
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
      global $referer3;

    $referer = 'https://academics.vit.ac.in/parent/parent_login_submit.asp';
 $ch = curl_init();

    if ($method == 'post') {
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
    echo '1';
    curl_close($ch);
    
    global $buffer1;
   rahul();
    return $buffer1;
}


function result()
{
    
     
    // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/grades.asp?sem=FS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
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
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,'<table width="79%" border="0" cellpadding="0" cellspacing="0" height="350">');
$end = strpos($content,'</html>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 
 echo"this is the result";

foreach ($rows[0] as $row){
//echo"here is the row {$row}\n";


 
    if ((strpos($row,'show')==true)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][1]);
        echo "THE POS IS{$pos}";
       
    }
}
    
    
   //print(json_encode($values));
   
    
}



function rahul()
{
    
    global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer3 = 'https://academics.vit.ac.in/parent/timetable.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
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
    curl_close($ch);
    
   
}


function rahul2()
{
    global $result3;
    global $attnd;


$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($result3));

$start = strpos($content,'<table cellspacing=0 cellpadding=2 border="1"  width="900" style="border-collapse: collapse" bordercolor="#000000">
');
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);


preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
 

foreach ($rows[0] as $row){
//echo $row;
echo "rahul";
$hi=strip_tags($row);
//echo"this is {$hi}";

 
    if ((strpos($row,'<th')==false) && (strpos($row,'TIME TABLE')==false)){
        global $mk;
        $mk++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
    	$number = strip_tags($cells[0][1]);
      //  echo $number;
        $attnd[$mk]['number']=$number;
       
 
		$name = strip_tags($cells[0][3]);
      
       
        $attnd[$mk]['name']=$name;
        
 
 
       
 
      
 
	
	}
   
 
    
 
}
echo"the value of il is{$mk}";
   print(json_encode($attnd));
   echo"the value of il name is{$attnd[9]['name']}";
   result();

    
    
    
}



function rahul3()
{
    
    
    // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/marks.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
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
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<table cellspacing='0' cellpadding='2' border='1' width='1100'");
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}\n";
$hi=strip_tags($row);
//echo"this is {$hi}";

 
    if ((strpos($row,'rowspan=2')==false) && (strpos($row,'width="55"')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
 //echo"here are the cells{$cells[0][0]}";
    	$number = strip_tags($cells[0][4]);
       // echo"is the number{$number} \n";
        $num=strip_tags($cells[0][0]);
       // echo $num;
        
        
        if(strcasecmp($number,"theory only")==0)
        {
            
            //$pos=strip_tags($cells[0][0]);
            //echo"theory thing{$pos}\n";
            $r=strip_tags($cells[0][2]);
            echo"the values of r is{$r}";
            $po=strip_tags($cells[0][3]);
            $pos1=strip_tags($cells[0][7]);
             $pos2=strip_tags($cells[0][9]);
              $pos3=strip_tags($cells[0][11]);
               $pos4=strip_tags($cells[0][13]);
                $pos5=strip_tags($cells[0][15]);
                 $pos6=strip_tags($cells[0][17]);
            
            $values[$po]['cat1']=$pos1;
             $values[$po]['cat2']=$pos2;
              $values[$po]['quiz1']=$pos3;
               $values[$po]['quiz2']=$pos4;
                $values[$po]['quiz3']=$pos5;
                 $values[$po]['ass']=$pos6;
            
            //echo"theory thing{$pos1}";
        
            
        }
        
        else if(strcasecmp($number,"lab only")==0)
        {
            //$cat1=strip_tags($cells[0][2]);
            //echo"the lab thing{$cat1}";
            $po1=strip_tags($cells[0][3]);
            $pos8=strip_tags($cells[0][9]);
             $values[$po1]['lab']=$pos8;
            
            
        }
        
     
       
      
 
 
 
 
    
   	}
       
   
    
 
}


    print(json_encode($values));
    
    rahul_exam();
    
}


function rahul_exam()
{
    
    
    // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/exam_schedule.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
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
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<tr bgcolor='#FFFFE8' align='center' height='25'><td colspan='11'><font color='#000000'><b>CAT - I</b>");
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}\n";


 
    if ((strpos($row,'CAT - II')==false) && (strpos($row,'Term End Exam')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][0]);
        $values[$pos]['code']=strip_tags($cells[0][1]);
        $values[$pos]['title']=strip_tags($cells[0][2]);
         $values[$pos]['date']=strip_tags($cells[0][5]);
         $values[$pos]['time']=strip_tags($cells[0][8]);
              $values[$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
    
   print(json_encode($values));
   
   
   rahul_attndnc();
}

function rahul_attndnc()
{
    
    
    
    // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/attn_report.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
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
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<b>Attendance <br/> Percentage</b></td><td><font color=#FFFFFF><b>View</b></td></tr>");
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}\n";


 
    if ((strpos($row,'CAT - II')==false) && (strpos($row,'Term End Exam')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][0]);
        $values[$pos]['code']=strip_tags($cells[0][1]);
        $values[$pos]['title']=strip_tags($cells[0][2]);
         $values[$pos]['attended']=strip_tags($cells[0][6]);
         $values[$pos]['total']=strip_tags($cells[0][7]);
              //$values[$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
    global $mk;
    global $attnd;
    echo"the vaue of mk is{$mk}";
    
    print(json_encode($values));
    
    for($kk=1;$kk<$mk;$kk++)
    {
        attndnc_detail($attnd[$kk]['number']);
    }
    
    //pbl_course();
    
    
    
    
}


function pbl_course()
{
    
    
    // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/marks.asp?sem=WS';
    
    $referer1 = 'https://academics.vit.ac.in/parent/home.asp';
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer);
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
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<table cellspacing='0' cellpadding='2' border='1' width='1000' style='border-collapse: collapse;' bordercolor='black'");

$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);
echo"the table is{$table}";

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo"the table is{$rows}";
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}";


 
    if ((strpos($row,'CAT - II')==false) && (strpos($row,'Term End Exam')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][0]);
        $values[$pos]['code']=strip_tags($cells[0][1]);
        $values[$pos]['title']=strip_tags($cells[0][2]);
         $values[$pos]['attended']=strip_tags($cells[0][6]);
         $values[$pos]['total']=strip_tags($cells[0][7]);
              //$values[$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
    global $mk;
    global $attnd;
    echo"the vaue of mk is{$mk}";
    
    print(json_encode($values));
    
    
    
    
    
}




function attndnc_detail($num)
{
    //echo"the value of num is{$num}";
    
   // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer3 = 'https://academics.vit.ac.in/parent/attn_report_details.asp';
    
    $referer1 = 'https://academics.vit.ac.in/parent/attn_report.asp?sem=WS';
    $smcod="WINSEM2012-13";
    $clsnm=$num;
    $from="02-Jan-2013";
    $to="08-May-2013";
    $sub="Details";
    //$reg="10bce0123";
    
    $vars = "semcode=".$smcod."&classnbr=".$clsnm."&from_date=".$from."&to_date=".$to."&submit=".$sub;
    
 $ch = curl_init();
global $cookie;
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
   
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
    curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
//global $buffer1;
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    
    
    echo $buffer1;
    
     global $cookie;
  global $result3;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);



$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<table width='600' cellspacing=0 cellpadding=4 border=1 bordercolor=#000000 style='border-collapse: collapse'");

$end = strpos($content,"</table><br><center><input type='button' class='submit3'",$start) + 8;
 
$table = substr($content,$start,$end-$start);
//echo"the table is{$table}";

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo"the table is{$rows}";
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}";


 
    if ((strpos($row,'Student')==false) && (strpos($row,'Class Slot')==false)&& (strpos($row,'Attendance')==false)&&(strpos($row,'Course')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][1]);
        $value['details'][$num][$pos]=strip_tags($cells[0][3]);
    //    $value[$num][$pos]['reason']=strip_tags($cells[0][5]);
         //$value[$num]['reason']=strip_tags($cells[0][5]);
        // $values[$num]['total']=strip_tags($cells[0][7]);
              //$values[$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
    global $mk;
   // global $attnd;
   // echo"the vaue of mk is{$mk}";
    echo"the json vale";
    print(json_encode($value));
    
    /*for($kk=0;$kk<$mk;$kk++)
    {
        attndnc_detail($attnd[$kk]['number']);
    }*/
    
    
    
    
    
    
    
}

function getUrl($url, $method='', $vars)
{
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    echo 'in get url';
    echo "\n $url";
    echo "\n $method";
    echo "\n $vars";
    echo 'read';
    $referer = 'https://academics.vit.ac.in/parent/parent_login.asp';
    $ch = curl_init();

    echo "\n";
    echo $ch;
    echo 'Ch definition';
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
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
    return $buffer;
}


function save_captcha($ch) {
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    $url = "https://academics.vit.ac.in/parent/captcha.asp";
    
    //static $cookie = false;
    
    global $cookie;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $ch = curl_init();    
    echo 'in another session yr';
    echo $ch;
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
    echo "Displaying the data\n";
   // echo $data;
    echo "Displayed data";
    curl_close($ch);  // close curl resource, and free up system resources.
    $captcha_tmpfile = './captcha/captcha-' . rand(1000, 10000) . '.jpg';
    echo "Displaying image file \n";
    echo "rahul with{$captcha_tmpfile}";
    $fp = fopen($tmpdir . $captcha_tmpfile, 'w');
    fwrite($fp, $data);
    fclose($fp);
    return $captcha_tmpfile;
    echo '1';
}
echo 'ansh1';
echo 'ansh2';

if (isset($_POST['submit'])) 
{
    $vr=htmlspecialchars($_POST['captcha']);
    echo "in the if part";
    $id = "10BCE0123";
    $pw = "14011992";
    echo "Displaying submiting details\n";
    echo $id;
    echo "$pw\n";
       echo "$user_id\n";
    echo "$cookie2 \n";
   // $vr='4392B1';



$st="1";
$com="Login";
echo "checking";
echo $_POST['captcha'];
echo "still checking";
  $postfields = "wdregno=".$id."&wdpswd=".$pw."&vrfcd=".$vr."&sublogin=".$st."&submit=".$com;
//$postfields= $postData = array( 'message'=>'','wdregno'=>$id, 'wdpswd'=>$pw,'vrfcd'=>$user_id,'submit'=>'Login' );

   echo $postfields;
   echo "checked";
    $url = "https://academics.vit.ac.in/parent/parent_login.asp";
    echo $cookie2;
    $result3 = getUrl2($url, 'post', $postfields,$cookie2);
    echo $result3;
    rahul2();

}
else {
    echo 'in the else part';

    $open = getUrl('https://academics.vit.ac.in/parent/parent_login.asp', '', '');
    echo 'again in elsee pat';
   // echo $open;
    echo 'printed values';
    echo $ch;
    echo 'captacha';
    $captcha = save_captcha($ch);
    $fp = fopen('./cookie.txt', 'r');
    $a = fread($fp, filesize('./cookie.txt'));
    fclose($fp);
}
?>




<form action='/ansh2.php' method='POST'>
        <img src='<?php echo $captcha ?>' />
        <input type='text' name='captcha' value="<?= isset($_POST['captcha']) ? htmlspecialchars($_POST['captcha']) : '' ?>"/>
        <input type='submit' name='submit'value='proses'/>
    </form>