<?php 

$username=$_POST['recoverEmail'];  
$password=$_POST['agpassword']; 
$password1=$_POST['confpassword']; 

if(strcmp($password,$password1)!=0)
{
    ?>
    
    <script>
    alert('password dont match');
    </script>
    <?php
}
else
{



$usern = "msgbrd";  
$pswd = "msgbrd1@A";  
$db = "msgbrd";  
$conn = mysql_connect("118.139.179.67", $usern, $pswd);  

mysql_select_db($db, $conn);  
 




$ins= "Select * from login where username='$username' and password='$password'";
$count=0;
$res=mysql_query($ins);
$count =mysql_num_rows($res);

$query="insert into login values('$username','$password')";



if(mysql_num_rows($res)>0)
{
   ?> 
    <html>
    <head>
    <script>
    var x=window.alert('already registered');
    if(x)
    {
    document.write(x);
  window.history.go(-1);
    }
    </script>
    </head>
    </html>
    
    <?php
   // header('Location:http://www.adgvit.in/loginf/index.html');
    
    
    
    
}
else
{
    
$res2=mysql_query($query);
header('Location:http://www.adgvit.in/msg/index.htm');

}
mysql_close();
}
?>
