<?php  

 $jsonString = $_POST['json'];  
$string = str_replace("\", "<br />", $jsonString);
echo $string;
 //$jArray = json_decode('$jsonString', true);
//$jArray=json_decode('[{"notification_id":0},{"notification_id":1}]',true);
echo $jArray;
/*$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn);  

foreach( $jArray as $obj ){
    $notification_id = $obj['notification_id'];   
 
    $result = mysql_query("update Notifications set is_seen='seen' where notification_id='$notification_id'");

   

}*/





/*$query = "update Notifications set is_seen='seen' where notification_id='$notification_id'";

$result = mysql_query($query);*/

/*if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
$output[]=$e;
}
print(json_encode($output));

}
else if(mysql_num_rows($result)==0)
{
$output2="Not successful";
print(json_encode($output2));
}
mysql_close();*/
?>
