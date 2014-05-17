<?php
session_start();
$id=$_SESSION['id'];
$qid=$_GET['qid'];
$userid=$_GET['userid'];
require('config.php');

$query="select totalpoints from users where id=$id";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
    
    $totalpoints=$row['totalpoints'];
   
}


$query="select * from downvote";
$res=mysql_query($query);
$flag=0;
while($row=mysql_fetch_assoc($res))
{
    $qid2=$row['qid'];
    $id2=$row['id'];
    if($qid2===$qid && $id2===$id)
    {
        echo 'already downvoted';
        $flag=1;
        break;
    }
}
if($flag==0)
{
    if($totalpoints>=120)
    {
$query2="insert into downvote values($qid,$id)";
mysql_query($query2);


$query="select totalpoints from users where id=$userid";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
    
    $totalpoints_user=$row['totalpoints'];
    
   
}

$query3="update users set totalpoints=$totalpoints_user-5 where id=$userid";
mysql_query($query3);
echo 'downvoted';

}
else
{
echo 'you do not have enogh points to downvote';
}
}


?>