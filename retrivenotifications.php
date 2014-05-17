<?php  

$user_id=$_POST['user_id'];
$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "Select * from Notifications INNER JOIN registration ON Notifications.user_id=registration.user_id INNER JOIN Status ON Status.status_id=Notifications.status_id where Notifications.notifier_id='$user_id' and is_seen='unseen'";

$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
$output[]=$e;
}
print(json_encode($output));

}
else if(mysql_num_rows($result)==0)
{
$output2="Not successful";
print(json_encode($output2));
}
mysql_close();
?>
