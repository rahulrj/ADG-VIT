<?php  
/*$username=$_POST['username'];  
$password=$_POST['password'];  */
$user_id=$_POST['user_id'];

$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT registration.username, Status.status_id, Status.user_id, Status.category, Status.date, Status.time, Status.status, Status.album_id, Status.likes, Status.profile_pic  FROM Status INNER JOIN Follow ON Status.user_id=Follow.following_id INNER JOIN registration ON Status.user_id=registration.user_id where Follow.user_id='$user_id' order by Status.status_id desc limit 10;";
$result = mysql_query($query);

/*if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}*/


$i=0;

while($row=mysql_fetch_assoc($result))
{   




//Where Image Exists.
//First taking path from database and then image from folder against that path and then //converting it ino base64 and then Json
   $a= base64_encode(file_get_contents("http://vitadg.in.previewdns.com/".$row['profile_pic']));
$b=substr($a,0,50);
$output[$i]['image']=$a;


  $i++;
}


print(json_encode($output));
mysql_close();
?>
