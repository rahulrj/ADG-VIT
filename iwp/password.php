<?php  
session_start();
$username=$_POST['change_username'];  
$oldpassword=$_POST['change_oldpassword'];
$newpassword=$_POST['change_newpassword'];
$oldpassword=md5($oldpassword);
$newpassword=md5($newpassword);
$usern = "VitCommunity";  
$pswd = "Myf@mil3";  
$db = "VitCommunity";  
$conn = mysql_connect("118.139.179.46", $usern, $pswd);  

mysql_select_db($db, $conn);  



$query = "SELECT * from users where name='$username' and password='$oldpassword'";

$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
$query="update users set password='$newpassword' where name='$username' and password='$oldpassword'";
mysql_query($query);
header('Location:http://adgvit.in/iwp/questiondisplay.php');
}
else if(mysql_num_rows($result)==0)
{
$output2="Not successful";
print($output2);
}
mysql_close();
?>
