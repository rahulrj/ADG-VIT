<?php 

$username=$_POST['username'];  
$password=$_POST['password'];  
$user_id=$_POST['user_id'];  




$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn);  
 $mysqli = new mysqli("203.124.112.45", $usern, $pswd, $db);




$ins= "Select * from registration where email='$user_id' and password='$password'";
$query="insert into registration values('','$user_id','$password','$username')";

$res=mysql_query($ins);
$count =mysql_num_rows($res);

if(mysql_num_rows($res)>0)
{

$query2="Select user_id from registration where email='$user_id' and password='$password'";
$result=mysql_query($query2);
if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}
}
else
{
$res2=mysql_query($query);
}
mysql_close();
?>
