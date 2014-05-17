<?php 

$bday=$_POST['bday'];  
$phone=$_POST['phone'];  
$sex=$_POST['sex']; 
$school=$_POST['school'];  
$branch=$_POST['branch'];  
$year=$_POST['year'];  
$club=$_POST['club'];  
$club_desc=$_POST['club_desc'];  
$user_id=$_POST['user_id'];  

echo 'anshul';


echo $username;
echo $password;
echo $user_id;


$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  
 
$query="insert into Personal_Info values('$user_id','$bday','$sex','$phone','$year','$school','$branch','$club','$club_desc')";

$res=mysql_query($query);
mysql_close();
?>
