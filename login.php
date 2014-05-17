<?php  
$username=$_POST['username'];  
$password=$_POST['password'];  


$str="anshul";


$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT user_id from registration where email='$username' and password='$password'";

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
