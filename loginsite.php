<?php  
$username=$_POST['username'];  
$password=md5($_POST['password']);

$usern = "VitCommunity";  
$pswd = "Myf@mil3";  
$db = "VitCommunity";  
$conn = mysql_connect("118.139.179.46", $usern, $pswd);  

mysql_select_db($db, $conn);  



$query = "SELECT id from users where name='$username' and password='$password'";

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
print($output2);
}
mysql_close();
?>
