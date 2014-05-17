<?php  
$username=$_POST['username'];  
//$password=$_POST['password'];  


$usern = "vitapp";  
$pswd = "Rahulanshul1@";  
$db = "vitapp";  
$conn = mysql_connect("203.124.112.81", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT *  FROM acad_calendar";

$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}
mysql_close();
?>