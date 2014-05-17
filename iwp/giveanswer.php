<?php
session_start();
$session=$_SESSION['id'];
echo "sessiion is $session";
$userid=$_POST['userid'];
$qid=$_POST['qid'];
$answer=$_POST['answer'];
$date=date("Y:m:d");
$timezone = new DateTimeZone("Asia/Kolkata" );
$datetime = new DateTime();
$datetime->setTimezone($timezone );
$time=$datetime->format( 'H:i:s' );

include('config.php');
$query="insert into answers values('',$qid,$userid,'$answer','$date','$time')";
mysql_query($query);
echo "successfully submitted the question";


?>