<?php  
$status_id=$_POST['status_id'];  
$user_id=$_POST['user_id'];

$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  



$query="Select registration.username from registration INNER JOIN Likes_on_Status ON registration.user_id=Likes_on_Status.user_id where Likes_on_Status.status_id='$status_id'";
$result=mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}
else
{
    print("Nobody likes it");
}





mysql_close();
?>
