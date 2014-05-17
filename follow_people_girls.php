<?php  
$user_id=$_POST['user_id'];  



$usern = "WhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "WhatsGoingOn";  
$conn = mysql_connect("203.124.112.45", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "SELECT school,branch from Personal_Info where user_id='$user_id'";

$result = mysql_query($query);
while($row=mysql_fetch_assoc($result))
{   


  $school= $row['school'];
  $branch =$row['branch'];

$query2="Select registration.username, registration.user_id from Personal_Info INNER JOIN registration on Personal_Info.user_id=registration.user_id where Personal_Info.sex='F' and NOT registration.user_id = '$user_id'";
$result2=mysql_query($query2);

if(mysql_num_rows($result2)>0)
{
while($e=mysql_fetch_assoc($result2))
{
$user_id1=$e['user_id'] ;

$check="Select * from Follow where user_id='$user_id' and following_id='$user_id1'";
$checkresult=mysql_query($check);
if(mysql_num_rows($checkresult)>0)
{
    
}
else
{
$output[]=$e;
}
}
print(json_encode($output));

}


 
}

/*if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
$output[]=$e;
}
print(json_encode($output));

}*/

mysql_close();
?>
