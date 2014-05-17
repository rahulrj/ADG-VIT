<?php 
session_start();
$username=$_POST['username'];  
$password=md5($_POST['password']);  

$usern = "VitCommunity";  
$pswd = "Myf@mil3";  
$db = "VitCommunity";  
$conn = mysql_connect("118.139.179.46", $usern, $pswd);  

mysql_select_db($db, $conn);  
 




$ins= "Select * from users where name='$username' and password='$password'";
$count=0;
$res=mysql_query($ins);
$count =mysql_num_rows($res);




if(mysql_num_rows($res)>0)
{
header('Location:http://adgvit.in/iwp/index2.php?errormsg="Already a registered user');

}
else
{
$query="insert into users values('','$username','$password','150')";
$result = mysql_query($query);
$query = "SELECT * from users where name='$username' and password='$password'";

$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
    $id=$e['id'];
    $username=$e['name'];
$output[]=$e;
}

$_SESSION['id']=$id;
$_SESSION['username']=$username;
header('Location:http://adgvit.in/iwp/questiondisplay.php');


$res2=mysql_query($query);
}}
mysql_close();
?>
