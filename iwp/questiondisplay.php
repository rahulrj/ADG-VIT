<?php
session_start();
if(isset($_SESSION['id']))
$a= $_SESSION['id'];
else
header('Location:http://adgvit.in/iwp/index.php');
$username= $_SESSION['username'];
?>

<html>
<head>
<style>
.rightmenu2
{
  border-top: 1px solid #090a0a;
   background: black;
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;}
   #container{
    float:left;
	overflow:scroll;
	width:70%;
	height:95%;
	margin-top:0%;
}
#decoration
{
height:16%;
width:inherit;
background: -moz-linear-gradient(top, #6bba70 0%, #6bba70 100%);
}
.outer
{
width:96%;
height:20%;
padding-top:1%;
margin-top:2%;
margin-left:2%;
border:2px solid black;
display:block;
}

 

</style>
<link rel="stylesheet" type="text/css" href="http://www.adgvit.in/iwp/mycss.css">
<script type="text/javascript" src="http://adgvit.in/iwp/menu.js"></script>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<body style="background:white;" >
<div id="decoration" style="background: #373737 url("http://www.adgvit.in/iwp/bg.png") 0 0 repeat">
<label id="webname" style="font-size:40px;"> Vit Social Network </label>
<div class="menu">
<?php echo "<label style='color:white;margin-right:20px;'>$username</label>"; ?>
<button style="margin:left:20px;" class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/mainpage.php'">Ask Question</button>
<button class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/changepassword.php'">Change Passowrd</button>

<button class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/logout.php'">Logout</button>

</div>

</div>
<div id="container">


<?php
require('config.php');
$query="Select * from questions INNER JOIN users on questions.id=users.id order by questions.qid DESC";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
$question=$row['question'];
$title=$row['title'];
$date=$row['date'];
$time=$row['time'];
$name=$row['name'];
$qid=$row['qid'];
$userid=$row['id'];
?>
 
<div class="outer">
<img src="http://www.adgvit.in/iwp/pic.jpg"  alt="not availabe"/>
<div class="name"><?php echo $name ?></div>

<div class="time"> <?php echo $date?></label></div>
<div class="title"><label><?php echo $title ?></div>
<div class="buttons">
<button class="rightmenu2" name="reply" onclick="window.location='http://adgvit.in/iwp/fullanswer.php?qid=<?=$qid?>&userid=<?=$userid?>'">Reply</button>
<button class="rightmenu2" name="view" onclick="window.location='http://adgvit.in/iwp/fullanswerwithoutpost.php?qid=<?=$qid?>&userid=<?=$userid?>'">View Answer</button>

</div>

</div>


<?php
}
?>
</div>
<div class="right">
<label class="label" >Top Scorers</label>
<table >
<tr>
<th>Name</th>
<th>Points</th>
</tr>

<?php
$query="Select * from users order by totalpoints desc limit 10";
$res=mysql_query($query);
$num=mysql_num_rows($res);

while($row=mysql_fetch_assoc($res))
{
    $totalpoints=$row['totalpoints'];
    $name=$row['name'];
    ?>
<tr>
<td  class="shownames"><?php echo $name?></td>
<td class="showpoints"><?php echo $totalpoints?></td>
</tr>

<?php
}
?>
</table>
</div>

</div>
<body>

</html>