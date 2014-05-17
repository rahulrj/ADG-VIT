<?php  


$usern = "Facultylist";  
$pswd = "Myf@mil3";  
$db = "Facultylist";  
$conn = mysql_connect("118.139.168.192", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT * from Faculties";

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
