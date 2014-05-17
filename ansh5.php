
<?php
define('COOKIE', './cookie2222.txt');
define('COOKIE2', './target.txt');
define('COOKIE3', './target2.txt');


define('MYURL', 'http://www.iitg.ernet.in/cseweb/summerinternship/logmein');
  $user_id=$_POST['submit'];  
  global $regno;
  global $password;
  global $captcha;
  $regno=$_POST['regno'];  
   $password=$_POST['password'];  
   $captcha=$_POST['captcha']; 
 
  
  $buffer1;
  $referer3;
  $result3;
  $il=0;
   $values;
   $attnd;
   $counting=0;
   $newone="rahul rjjjjjjjjjjjjjjjjjjjjjj";
 function printval()
 {
     global $values;
     global $newone;
     $stringval['rahu']['rah']['rahui']=$newone;
     // print(json_encode($stringval));
     print(json_encode($values));
    // print(json_encode($newone));
 }
   
   function grades()
{
    
   // echo "result";
     // global $referer3;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer = 'https://academics.vit.ac.in/parent/grade.asp?sem=FS';
    
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
//echo"in grades";

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 
global $values;
foreach ($rows[0] as $row){
//echo"here is the row {$row}\n";
$hi=strip_tags($row);
//echo"this is {$hi}";

 
    if ((strpos($row,'class="submit" value="Show"')==true)){
      //  echo"not here";
        //global $il;
        //$il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
 //echo"here are the cells{$cells[0][0]}";
$sub = strip_tags($cells[0][2]);
//echo"the subject is {$sub}";
      
     //   echo"is the number{$sgrade} \n";
        
        $agrade=strip_tags($cells[0][11]);
          $values['grades'][$sub]['agrade']=$agrade;
           //  echo"is the number{$agrade} \n";
             $bgrade=strip_tags($cells[0][12]);
               $values['grades'][$sub]['bgrade']=$bgrade;
            //  echo"is the number{$bgrade} \n";
              $cgrade=strip_tags($cells[0][13]);
                $values['grades'][$sub]['cgrade']=$cgrade;
              // echo $cgrade;
              $dgrades=strip_tags($cells[0][14]);
                $values['grades'][$sub]['dgrade']=$dgrades;
              // echo $dgrade;
              $egrades=strip_tags($cells[0][15]);
                $values['grades'][$sub]['egrade']=$egrades;
              // echo $egrade;
              $fgrades=strip_tags($cells[0][16]);
                $values['grades'][$sub]['fgrade']=$fgrades;
              // echo $fgrade;
              $marks=strip_tags($cells[0][17]);
                $values['grades'][$sub]['marks']=$marks;
              // echo $marks;
              $grade=strip_tags($cells[0][18]);
                $values['grades'][$sub]['grade']=$grade;
                  $sgrade=strip_tags($cells[0][10]);
        
        $values['grades'][$sub]['sgrade']=$sgrade;
              // echo $grade;
    //          echo"<br>";
        
        //$num=strip_tags($cells[0][0]);
       // echo $num;
        
        
     
       
      
 
 
 
 
    
       }
}
printval();

}

function attndnc_detail($num)
{
    
    global $values;
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    $referer3 = 'https://academics.vit.ac.in/parent/attn_report_details.asp';
    
    $referer1 = 'https://academics.vit.ac.in/parent/attn_report.asp?sem=WS';
    $smcod="WINSEM2012-13";
    $clsnm=$num;
    $from="02-Jan-2013";
    $to="08-May-2013";
    $sub="Details";
    $vars = "semcode=".$smcod."&classnbr=".$clsnm."&from_date=".$from."&to_date=".$to."&submit=".$sub;
    
 $ch = curl_init();
global $cookie;
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_URL, $referer3);
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
    $buffer1 = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
        die;
    }
    curl_close($ch);
     global $cookie;
  global $result3;
$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<table width='600' cellspacing=0 cellpadding=4 border=1 bordercolor=#000000 style='border-collapse: collapse'");

$end = strpos($content,"</table><br><center><input type='button' class='submit3'",$start) + 8;
 
$table = substr($content,$start,$end-$start);
preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
foreach ($rows[0] as $row){
    if ((strpos($row,'Student')==false) && (strpos($row,'Class Slot')==false)&& (strpos($row,'Details')==false)&&(strpos($row,'Course')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        $no=strip_tags($cells[0][0]);
        
        $pos=strip_tags($cells[0][1]);
       // echo "The value of position is $pos";
        $values['attndet'][$num][$pos]=strip_tags($cells[0][3]);
     $values['dates'][$num][$no]=strip_tags($cells[0][1]);
   
    }
}
   // print(json_encode($value));
    global $mk;
    
    
    
    
}

   function rahul_exam()
{
    global $values;
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
        $values['sch'][$pos]['code']=strip_tags($cells[0][1]);
        $values['sch'][$pos]['title']=strip_tags($cells[0][2]);
         $values['sch'][$pos]['date']=strip_tags($cells[0][5]);
         $values['sch'][$pos]['time']=strip_tags($cells[0][8]);
              $values['sch'][$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
     
 //  print(json_encode($values));
  pbl_course();
 // printval();
   
   
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


global $values;
$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($buffer1));

$start = strpos($content,"<table cellspacing='0' cellpadding='2' border='1' width='1000' style='border-collapse: collapse;' bordercolor='black'");

$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);
//echo"the table is{$table}";
stripslashes($table);
 $values['pbl']['anshul']['anshul']=$table;
       


//$table = substr($content,$start,$end-$start);

/*preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo"the table is{$rows}";
 

foreach ($rows[0] as $row){
//echo"here is the row {$row}";


 
    if ((strpos($row,'CAT - II')==false) && (strpos($row,'Term End Exam')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
        
        
        $pos=strip_tags($cells[0][0]);
        
        
 
 
    }
}
    
   
   // print(json_encode($values));*/
    
    grades();
    
   // printval();
    
}
 
 function rahul_attndnc()
{
    
    
    global $values;
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
       $values['attn'][$pos]['code']=strip_tags($cells[0][1]);
        $values['attn'][$pos]['title']=strip_tags($cells[0][2]);
         $values['attn'][$pos]['attended']=strip_tags($cells[0][6]);
         $values['attn'][$pos]['total']=strip_tags($cells[0][7]);
           $values['attn'][$pos]['per']=strip_tags($cells[0][8]);
       
              //$values[$pos]['venue']=strip_tags($cells[0][9]);
        
 
 
    }
}
    
    global $counting;
   
    
    global $attnd;
    
    for($kk=1;$kk<$counting;$kk++)
    {
      attndnc_detail($attnd[$kk]['number']);
     // echo"here te number is{$attnd[$kk]['number']}";
      
    }
    rahul_exam();
    //pbl_course();

    
}

 
function getUrl2($url, $method='', $vars,$cookie2)
{ 
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
      global $referer3;

    $referer = 'https://academics.vit.ac.in/parent/parent_login_submit.asp';
 $ch = curl_init();
  $vars2 = "wdregno=".$regno."&wdpswd=".$password."&vrfcd=".$captcha."&sublogin="."1"."&submit="."Login";
   

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
    curl_close($ch);
    
    global $buffer1;
    rahul();
    return $buffer1;
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
    global $cookie;
  global $result3;
  global $values;
//$url = "http://www.nfl.com/teams/sandiegochargers/roster?team=SD";
 
//$raw = file_get_contents($referer3);

global $attnd;

$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
 
$content = str_replace($newlines, "", html_entity_decode($result3));

$start = strpos($content,'<table cellspacing=0 cellpadding=2 border="1"  width="900" style="border-collapse: collapse" bordercolor="#000000">
');
$end = strpos($content,'</table>',$start) + 8;
 
$table = substr($content,$start,$end-$start);

//$table = substr($content,$start,$end-$start);

preg_match_all("|<tr(.*)</tr>|U",$table,$rows);
//echo $rows[0];
 global $counting;

foreach ($rows[0] as $row){
//echo $row;
$hi=strip_tags($row);
//echo"this is {$hi}";

 
    if ((strpos($row,'<th')==false) && (strpos($row,'TIME TABLE')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
	$snumber = strip_tags($cells[0][0]);
        $values['det'][$il]['sno']=$snumber;
      
		$number = strip_tags($cells[0][1]);
        $values['det'][$il]['classno']=$number;
      
 
		$position = strip_tags($cells[0][2]);
        $values['det'][$il]['coursecode']=$position;
        
        $position = strip_tags($cells[0][3]);
        $values['det'][$il]['coursetitle']=$position;
        
         $position = strip_tags($cells[0][4]);
        $values['det'][$il]['coursetype']=$position;
 
        $position = strip_tags($cells[0][5]);
        $values['det'][$il]['ltpc']=$position;
        
         $position = strip_tags($cells[0][6]);
        $values['det'][$il]['coursemode']=$position;
        
         $position = strip_tags($cells[0][7]);
        $values['det'][$il]['courseoption']=$position;
        
        $position = strip_tags($cells[0][8]);
        $values['det'][$il]['slot']=$position;
        
         $position = strip_tags($cells[0][9]);
        $values['det'][$il]['venue']=$position;
 
         $position = strip_tags($cells[0][10]);
        $values['det'][$il]['faculty']=$position;
 
  $attnd[$il]['number']=$number;
       
 
 
    
   	}
   
    $counting=$il;
 
}
  // print(json_encode($values));

    rahul3();    
    
}


function rahul3()
{
    global $values;
    
    
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

foreach ($rows[0] as $row){
$hi=strip_tags($row);
    if ((strpos($row,'rowspan=2')==false) && (strpos($row,'width="55"')==false)){
        global $il;
        $il++;
 
        preg_match_all("|<td(.*)</td>|U",$row,$cells);
 
        $number = strip_tags($cells[0][4]);
        $num=strip_tags($cells[0][0]);
        
        
        if(strcasecmp($number,"theory only")==0)
        {
            
            $r=strip_tags($cells[0][2]);
            $po=strip_tags($cells[0][3]);
            $pos1=strip_tags($cells[0][7]);
             $pos2=strip_tags($cells[0][9]);
              $pos3=strip_tags($cells[0][11]);
               $pos4=strip_tags($cells[0][13]);
                $pos5=strip_tags($cells[0][15]);
                 $pos6=strip_tags($cells[0][17]);
            
           $values['marks'][$po]['cat1']=$pos1;
             $values['marks'][$po]['cat2']=$pos2;
              $values['marks'][$po]['quiz1']=$pos3;
               $values['marks'][$po]['quiz2']=$pos4;
                $values['marks'][$po]['quiz3']=$pos5;
                 $values['marks'][$po]['ass']=$pos6;
        }
        
        else if(strcasecmp($number,"lab only")==0)
        {
            $po1=strip_tags($cells[0][3]);
            $pos8=strip_tags($cells[0][9]);
           //  $values['marks'][$po1]['lab']=$pos8;
            
            
        }
        
     
       
      
 
 
    
   	}
       
   
    
 
}


    rahul_attndnc();
    
}

function getUrl($url, $method='', $vars)
{
    $agents = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16';
    global $cookie2;
    //static $cookie = false;
    global $cookie;
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
      // curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE2);
 
    curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
     /* $file2 = 'cookie3.txt';
    $fp = fopen($file2, 'w');
    fwrite($fp, $data);
    fclose($fp);*/
     $file = fopen('cookie2222.txt', 'r');
    $newfile = fopen('target.txt', 'w');
  /*  while(($line = fgets($file)) !== false) {
     if(strpos($line, 'user.php') !== false) {
       fputs($newfile, $line);
     }
    }*/
 //   copy('cookie2222.txt', 'target.txt');
    fclose($newfile);
    fclose($file);
  

    $buffer = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "error " . curl_error($ch);
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
    
    //static $cookie = false;
    
    global $cookie;
    if (!$cookie) {
        $cookie = session_name() . '=' . time();
    }
    $ch = curl_init();    
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
    $captcha_tmpfile = './captcha/captcha-' . rand(1000, 10000) . '.jpg';
    $fp = fopen($tmpdir . $captcha_tmpfile, 'w');
    fwrite($fp, $data);
    fclose($fp);
    copy('cookie2222.txt','target.txt');
     $a= base64_encode(file_get_contents("http://adgvit.in.previewdns.com/".$captcha_tmpfile));
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
  $postfields = "wdregno=".$regno."&wdpswd=".$password."&vrfcd=".$captcha."&sublogin=".$st."&submit=".$com;
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

