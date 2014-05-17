<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript" src="http://adgvit.in/iwp/myjava.js"></script>
<style type="text/css">
div.headline
{
float: none;
width: 427px;
height: 427px;
margin: 0;
display: table;
float:left;
background-image: url('http://adgvit.in/iwp/hero-bubble-large2.png');
background-repeat: no-repeat;
margin-left:80px;
    
}
.h1-large
{
	

display:table-cell;
margin-bottom: 28px;
padding: 18px 67px;
color: #fff;

vertical-align:middle;
}
form
{
height:300px;
width:300px;
display:block;
float:left;
}
fieldset
{
height:300px;
width:300px;
float:left;
}
.elements
{
display:block;
}
input
{
width:250px;
}
button
{
background:ThreeDDarkShadow;
background-color:#3366FF;
color:white;
}

</style>
<script type="text/javascript">
function vl()
{
var x=document.regform.password.value;
var y=document.regform.cpassword.value;
if(x==y)
{
alert('matched');
}
else
{
alert('not matched');

}

}
</script>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<div class="bubblesWrapper">
			<div class="bubbles">
				<div class="headline">
					<h1 class="h1-large">A place for Vitians to share their knowledge.</h1>
				</div>
				</div>
				</div>

<fieldset>
<form name="loginform" class="elements" style="float:none" method="post" action="http://adgvit.in/iwp/loginsite.php" >
<label class="elements">Sign in</label>
<label class="elements" style="margin-top:25px">USERNAME</label>
<input type="text" style="margin-top:5px" name="login_username"/>
<label class="elements" style="margin-top:15px"> PASSWORD </label>
<input type="text" style="margin-top:5px" name="login_password"/>
<input type="submit" value="Login" onclick="return loginvalidate()" />

</form>
</fieldset>
<fieldset>
<form name="regform" class="elements" style="float:none"  method="post" action="http://adgvit.in/iwp/register.php">
<label class="elements">Sign up</label>
<label class="elements" style="margin-top:25px" >USERNAME</label>
<input type="text" style="margin-top:5px" name="username"/>
<label class="elements" style="margin-top:15px"> PASSWORD </label>
<input type="text" style="margin-top:5px" name="password"/>

<label class="elements" style="margin-top:15px"> RE-ENTER PASSWORD </label>
<input type="text" style="margin-top:5px" name="cpassword"/>

<input type="submit" value="submit" name="register" onclick="return validateform()" />

</form>
</fieldset>
	
				

</body>

</html>


<?php 
echo 'anshul';
?>
