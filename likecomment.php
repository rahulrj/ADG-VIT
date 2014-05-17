<?php  
$comment_id=$_POST['comment_id'];  
$likes=$_POST['likes'];
$user_id=$_POST['user_id'];
echo $user_id;
echo $comment_id;
echo $likes;

$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232", $usern, $pswd);  

mysql_select_db($db, $conn);  



$checkquery="Select * from Likes_Comments where user_id='$user_id' and comment_id='$comment_id'";
$check=mysql_query("Select * from Likes_Comments where user_id='$user_id' and comment_id='$comment_id'");
$count=mysql_num_rows($check);
echo $count;
if($count==0)
{
    echo "Empty toh h bhai";
    $query = "update Comments_On_Status set likes_comment='$likes' where comment_id='$comment_id'";
    echo "Empty hai bhaiya";
    $result = mysql_query($query);
    $query2= "insert into Likes_Comments values('$comment_id','$user_id')";
    echo "Absolutely empty yr";
    $result2 = mysql_query($query2)OR die(mysql_error());
    $output="liked";
    print($output);
  
}
else
{
    $output="Already liked";
    print($output);
}


mysql_close();
?>
