<?php  
$user_id=$_POST['user_id'];  



$usern = "VitWhatsGoingOn";  
$pswd = "Myf@mil3";  
$db = "VitWhatsGoingOn";  
$conn = mysql_connect("182.50.131.232 ", $usern, $pswd);  

mysql_select_db($db, $conn);  




$query = "Select * from registration where user_id=any(Select Follow.following_id from Follow INNER JOIN registration ON registration.user_id=Follow.user_id where Follow.user_id=any(Select Follow.following_id from Follow INNER JOIN registration ON registration.user_id=Follow.user_id where registration.user_id='$user_id')) and user_id!='$user_id'";

$result = mysql_query($query);

while($row=mysql_fetch_assoc($result))
{
 $user_id1=$row['user_id'] ;

$check="Select * from Follow where user_id='$user_id' and following_id='$user_id1'";
$checkresult=mysql_query($check);
if(mysql_num_rows($checkresult)>0)
{
    
}
else
{
$output[]=$row;
}
 
}
print(json_encode($output));

mysql_close();
?>
