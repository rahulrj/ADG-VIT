<?php
$username=$_POST['username'];  
$password=$_POST['password'];  
$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn);  

$query = "select * from Status where status_id ='100000641'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){

    $img=$row['profile_pic'];

   
}
$image='http://vitadg.in.previewdns.com/images/1.jpg';

echo '<img src="' . $image . '" height="100" width="100"/>';

?>
