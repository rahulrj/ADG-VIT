<?php 

$username=$_POST['username'];  
$password=$_POST['password'];  
$fullname=$_POST['fullname'];  






$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$ins= "Select * from registration where email='$username' and password='$password'";
$query="insert into registration values('','$username','$password','$fullname')";

$res=mysql_query($ins);
$count =mysql_num_rows($res);
if(mysql_num_rows($res)>0)
{
echo 'registered';
$query2="Select user_id from registration where email='$name' and password='$password'";
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
$query2="Select user_id from registration where email='$username' and password='$password'";
$result=mysql_query($query2);
if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}
}
mysql_close();
?>
