<?php 
session_start();
$id=$_SESSION['id'];
$title=$_POST['title'];
$question=$_POST['question'];
 require('config.php');
 $date= mktime(0,0,0,date("m"),date("d")+1,date("Y"));
$date =date("Y-m-d", $date);
echo $date;

 $query="insert into questions values('','$id','$title','$question','','','$date','')";
 $res=mysql_query($query);
 


?>
