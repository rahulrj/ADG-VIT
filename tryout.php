<?php


$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn);  

$query = "select profile_pic from Status where Status_id ='100000642'";
$result=mysql_query($query);

$i=0;

while($row=mysql_fetch_assoc($result))
{   




//Where Image Exists.
//First taking path from database and then image from folder against that path and then //converting it ino base64 and then Json
   $a= base64_encode(file_get_contents("http://adgvit.in/".$row['profile_pic']));
$b=substr($a,0,50);
$output[$i]['image']=$a;


  $i++;
}


print(json_encode($output));




mysql_close();
?>

