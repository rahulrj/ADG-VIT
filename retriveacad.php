<?php  


$usern = "VitCalendar";  
$pswd = "Myf@mil3";  
$db = "VitCalendar";  
$conn = mysql_connect("203.124.112.61 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT * from Calendar";

$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
$output[]=$e;

print(json_encode($output));


}
else
{
    print('Not successful');
}

mysql_close();
?>
