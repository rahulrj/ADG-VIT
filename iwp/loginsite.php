<?php  
session_start();
$username=$_POST['login_username'];  
$password=md5($_POST['login_password']);
echo $username;
echo $password;

$usern = "VitCommunity";  
$pswd = "Myf@mil3";  
$db = "VitCommunity";  
$conn = mysql_connect("118.139.179.46", $usern, $pswd);  

mysql_select_db($db, $conn);  



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
//print(json_encode($output));
$_SESSION['id']=$id;
$_SESSION['username']=$username;
header('Location:http://adgvit.in/iwp/questiondisplay.php');

}
else if(mysql_num_rows($result)==0)
{
$output2="Not successful";
print($output2);
}
mysql_close();
?>
