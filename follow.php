<?php  
$user_id=$_POST['user_id'];  
$following_id=$_POST['following_id'];  
$access="follow";
echo $user_id;
echo $following_id;

$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT * from Follow where user_id='$user_id' and following_id='$following_id'";



$result = mysql_query($query);
$a=mysql_num_rows($result);
if(mysql_num_rows($result)>0)
{
$output="Already followed";
print(json_encode($output));

}

else 
{
$output="Not followed";
print(json_encode($output));
$query2="INSERT into Follow VALUES('$user_id','$following_id','$access')";
mysql_query($query2);
}


mysql_close();
?>
