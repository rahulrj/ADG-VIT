<?php  
$status_id=$_POST['status_id']; 

$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  



//$query="Select * from Comments_On_Status where status_id='$status_id'";
$query="Select * from Comments_On_Status JOIN registration on registration.user_id=Comments_On_Status.user_id where Comments_On_Status.status_id='$status_id'";

$result=mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
$output[]=$e;
$current=$e['status_id'];
$query2="Select * from Likes_on_Status where user_id='$user_id' and status_id='$current'";
$result2=mysql_query($query2);
if(mysql_num_rows($result2)>0)
{
    $output[]='true';

}
else
{
    $output[]='false';

}

}


print(json_encode($output));

}
else
{
 echo 'no rows';
}





mysql_close();
?>
