<?php 

$username=$_POST['username'];  
$password=$_POST['password'];  
echo $username;
echo $password;



$usern = "VitCommunity";  
$pswd = "Myf@mil3";  
$db = "VitCommunity";  
$conn = mysql_connect("118.139.179.46", $usern, $pswd);  

mysql_select_db($db, $conn);  
 




$ins= "Select * from users where name='$username' and password='$password'";
$count=0;
$res=mysql_query($ins);
$count =mysql_num_rows($res);

$query="insert into users values('','$username','$password')";



if(mysql_num_rows($res)>0)
{
echo 'Already registered';
}
else
{
    echo 'Not registered';
$res2=mysql_query($query);
}
mysql_close();
?>
