<?php 
session_start();
$username= $_SESSION['username'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="http://www.adgvit.in/iwp/myjava.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.adgvit.in/iwp/mycss.css">
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
</style>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<body style="background:white;">
<div id="decoration" style="background: #373737 url("http://www.adgvit.in/iwp/bg.png") 0 0 repeat">
<label id="webname" style="font-size:40px;"> Vit Social Network </label>
<div class="menu">
<?php echo "<label style='color:white;margin-right:20px;'>$username</label>"; ?>
<button style="margin:left:20px;" class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/mainpage.php'">Ask Question</button>
<button class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/changepassword.php'">Change Passowrd</button>

<button class="rightmenu2" onclick="window.location='http://adgvit.in/iwp/logout.php'">Logout</button>

</div>

</div>


<form style="margin-left:20px;" name="questionform" method="post" action="http://adgvit.in/iwp/submitques.php" >
<label style="display:block;font-size:20px;font-weight:bold;margin-top:20px;">Title</label>
<input type="text" style="width:700px;height:60px;margin-top:20px;" name="title"/>
<label style="display:block;font-weight:bold;">Question</label>
<input type="text" style="width:700px;height:300px;display:block;margin-top:10px;" name="question"/>
<input type="submit" class="rightmenu2" value="submit" onclick="return questionvalidate2()" style="margin-top:10px"/>
</form>


</body>

</html>
