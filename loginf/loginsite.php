<?php  
//session_start();
$username=$_POST['username'];  
$password=$_POST['password'];

$usern = "msgbrd";  
$pswd = "msgbrd1@A";  
$db = "msgbrd";  
$conn = mysql_connect("118.139.179.67", $usern, $pswd); 
//echo "connected";

mysql_select_db($db, $conn); 
//echo "seleted";



$sql = "SELECT * FROM login where username='$username' and password='$password'";
//echo "done";

$result = mysql_query($sql);
//print_r($result);



if(mysql_num_rows($result)>0)
{
while($e=mysql_fetch_assoc($result))
{
    //$id=$e['id'];
$output[]=$e;
}
//echo"yes";
//print(json_encode($output));
//$_SESSION['id']=$id;
header('Location:http://adgvit.in/msg/index.htm');

}
else if($result->num_rows==0)
{
    




header('Location:http://adgvit.in/loginf/index.html');

?>
<script>
alert("not succeessful");
</script>
<?php
}





mysql_close();
?>
