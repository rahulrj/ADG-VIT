<?php
    $json = $_SERVER['HTTP_JSON'];
    $jArray=json_decode($json,true);
    
$user_id=$_POST['user_id']; 
echo $user_id;
    
    $usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45 ", $usern, $pswd);  

mysql_select_db($db, $conn); 

 foreach( $jArray as $obj )
 {
    $following_id = $obj['following_id'];   
    echo $following_id;
    $query1="Select * from Follow where user_id='$user_id' and following_id='$following_id'";
    $result2=mysql_query($query1);
    if(mysql_num_rows($result2)>0)
    {
    echo 'Already followed';
    }
    else
    {
    $query2="insert into Follow values('$user_id','$following_id','allow')";
    $result=mysql_query($query2);
     $query3="insert into Notifications values('','$user_id','$notifier_id','','','follow','unseen')";
    $result3=mysql_query($query3);
    $query4="insert into Activity values('','$user_id','','','follow','','','')";
    $result4=mysql_query($query4);
   
    echo 'followed';
    }
 
  

 }
 

mysql_close();

  
?>