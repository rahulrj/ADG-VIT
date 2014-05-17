<?php  
$user_id=$_POST['user_id'];  
$status=$_POST['status'];
$date=$_POST['date'];
$time=$_POST['time'];  
$type=$_POST['type'];  



$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "insert into Status value ('','$user_id','$type','$date','$time','$status','','','','images/1.jpg')";

$result= mysql_query($query);
echo $result;
mysql_close();
?>