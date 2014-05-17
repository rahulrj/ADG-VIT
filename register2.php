<?php
    $json = $_SERVER['HTTP_JSON'];
    $jArray=json_decode($json,true);
    

    
    $usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn); 

 foreach( $jArray as $obj )
 {
    $email = $obj['email'];  
      $password = $obj['password'];  
  
    $username = $obj['username'];  
    
    echo $email;
    echo $password;
    echo $username;
    
    $query1="Select * from registration where email='$email' and password='$password'";
    $result1=mysql_query($query1);
    $count=mysql_num_rows($result1);
    echo 'count'.$count;
    if($count==0)
    {
        mysql_query("insert into Follow values ('735','740','allo')");
       // mysql_query("insert into registration values('','$email','$password','$username')");
        echo 'inserted';
    }
  /* if(mysql_num_rows($result1)>0)
    {
    echo 'Already registered';
    }
    else
    {
    $query2="insert into registration values('','$email','$password','$username')";
    $result2=mysql_query($query2);
    echo 'Registered successfully';
    }*/
 
  

 }
 

mysql_close();

  
?>