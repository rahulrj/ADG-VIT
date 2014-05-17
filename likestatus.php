<?php  
$status_id=$_POST['status_id'];  
$likes=$_POST['likes'];
$user_id=$_POST['user_id'];
$notifier_id=$_POST['notifier_id'];

echo $user_id;
echo $status_id;
echo $likes;
echo "\n notifier id is $notifier_id";

$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  



$checkquery="Select * from Likes_on_Status where user_id='$user_id' and status_id='$status_id'";
$check=mysql_query("Select * from Likes_on_Status where user_id='$user_id' and status_id='$status_id'");
$count=mysql_num_rows($check);
echo $count;
if($count==0)
{
    echo "Empty toh h bhai";
   $query = "update Status set likes='$likes' where status_id='$status_id'";
    echo "Empty hai bhaiya";
    $result = mysql_query($query);
    $query2= "insert into Likes_on_Status values('','$user_id','$status_id')";
    echo "Absolutely empty yr";
    $result2 = mysql_query($query2)OR die(mysql_error());
    $output="liked";
    $query3="insert into Notifications values('','$user_id','$notifier_id','$status_id','event','like','unseen')";
    $result3=mysql_query($query3);
    $query4="insert into Activity values('','$user_id','$status_id','event','like','','','')";
    $result4=mysql_query($query4);
    
    print($output);
  
}
else
{
    $output="Already liked";
    print($output);
}


mysql_close();
?>
