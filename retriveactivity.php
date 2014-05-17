<?php  
/*$username=$_POST['username'];  
$password=$_POST['password'];  */
$user_id=$_POST['user_id'];

$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232", $usern, $pswd);  

mysql_select_db($db, $conn);  


$a=array();

$query = "SELECT registration.username, Activity.activity_id, Activity.user_id, Activity.status_id, Activity.category, Activity.type, Activity.profile_pic, Activity.date, Activity.time  FROM Activity INNER JOIN Follow ON Activity.user_id=Follow.following_id INNER JOIN registration ON Activity.user_id=registration.user_id where Follow.user_id='$user_id' order by Activity.status_id desc limit 10;";
$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
$output[]=$e;
/*$current=$e['status_id'];
$query2="Select * from Likes_on_Status where user_id='$user_id' and status_id='$current'";
$result2=mysql_query($query2);
if(mysql_num_rows($result2)>0)
{
    $output[]='true';

}
else
{
    $output[]='false';

}*/

}


print(json_encode($output));

}


/*$i=0;

while($row=mysql_fetch_assoc($result))
{   




//Where Image Exists.
//First taking path from database and then image from folder against that path and then //converting it ino base64 and then Json
   $a= base64_encode(file_get_contents("http://vitadg.in.previewdns.com/".$row['profile_pic']));
$b=substr($a,0,50);
$output[$i]['image']=$a;


  $i++;
}


print(json_encode($output));*/
mysql_close();
?>
