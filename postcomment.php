<?php  
$user_id=$_POST['user_id'];  
$comment=$_POST['comment'];
$status_id=$_POST['status_id'];
$date=$_POST['date'];
$time=$_POST['time'];  
$comments_num=$_POST['comments_num'];  



$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "insert into Comments_On_Status value ('','$user_id','$status_id','$comment','$date','$time','','')";
$result= mysql_query($query);
$query2="update Status set comments='$comments_num' where status_id='$status_id'";
$result2=mysql_query($query2);
 $query3="insert into Notifications values('','$user_id','$notifier_id','$status_id','event','comment','unseen')";
 $result3=mysql_query($query3);
 $query4="insert into Activity values('','$user_id','$status_id','event','comment','','','')";
 $result4=mysql_query($query4);
   
echo $result;
mysql_close();
?>