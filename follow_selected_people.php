<?php 

 
$user_id=$_POST['user_id'];  

 $jsonString = $_POST['json'];  
echo $jsonString;
 print_r(json_decode('$jsonString',true));




$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn); 

 /*foreach( $jArray as $obj )
 {
    $notification_id = $obj['notification_id'];   
    echo $notification_id;
 
  //  $result = mysql_query("update Notifications set is_seen='seen' where notification_id='$notification_id'");

 }*/




/*$ins= "Select * from Follow where email='$user_id' and password='$password'";
$query="insert into registration values('','$user_id','$password','$username')";

$res=mysql_query($ins);
$count =mysql_num_rows($res);

if(mysql_num_rows($res)>0)
{

$query2="Select user_id from registration where email='$user_id' and password='$password'";
$result=mysql_query($query2);
if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));
}
}
else
{
$res2=mysql_query($query);
}*/
mysql_close();
?>
