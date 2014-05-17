<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
 <style>
  #mydiv2 {
    position:fixed;
    top: 1%;

    width:100%;
    height:15%;
    background:black;
    color:black;

}
.login {
  position: relative;
  margin: 80px auto;
  width: 400px;
  padding-right: 32px;
  font-weight: 300;
  color: #a8a7a8;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
}
.login p {
  margin: 0 0 10px;
}
.login-submit {
  position: absolute;
  top: 12px;
  right: 0;
  width: 48px;
  height: 48px;
  padding: 8px;
  border-radius: 32px;
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.35);
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.35);
}
.login-submit:before, .login-submit:after {
  content: '';
  z-index: 1;
  position: absolute;
}
.login-submit:before {
  top: 28px;
  left: -4px;
  width: 4px;
  height: 10px;
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.06);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.06);
}
.login-submit:after {
  top: -4px;
  bottom: -4px;
  right: -4px;
  width: 36px;
}

.login-button {
  position: relative;
  z-index: 2;
  width: 48px;
  height: 48px;
  padding: 0 0 48px;
  /* Fix wrong positioning in Firefox 9 & older (bug 450418) */
  text-indent: 120%;
  white-space: nowrap;
  overflow: hidden;
  background: none;
  border: 0;
  border-radius: 24px;
  cursor: pointer;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.1);
  /* Must use another pseudo element for the gradient background because Webkit */
  /* clips the background incorrectly inside elements with a border-radius.     */
}
.login-button:before {
  content: '';
  position: absolute;
  top: 5px;
  bottom: 5px;
  left: 5px;
  right: 5px;
  background: #00a2d3;
  border-radius: 24px;
  background-image: -webkit-linear-gradient(top, #00a2d3, #0d7796);
  background-image: -moz-linear-gradient(top, #00a2d3, #0d7796);
  background-image: -o-linear-gradient(top, #00a2d3, #0d7796);
  background-image: linear-gradient(to bottom, #00a2d3, #0d7796);
  -webkit-box-shadow: inset 0 0 0 1px #00a2d3, 0 0 0 5px rgba(0, 0, 0, 0.16);
  box-shadow: inset 0 0 0 1px #00a2d3, 0 0 0 5px rgba(0, 0, 0, 0.16);
}
.login-button:active:before {
  background: #0591ba;
  background-image: -webkit-linear-gradient(top, #0591ba, #00a2d3);
  background-image: -moz-linear-gradient(top, #0591ba, #00a2d3);
  background-image: -o-linear-gradient(top, #0591ba, #00a2d3);
  background-image: linear-gradient(to bottom, #0591ba, #00a2d3);
}
.login-button:after {
  content: '';
  position: absolute;
  top: 15px;
  left: 12px;
  width: 25px;
  height: 19px;
  background: url("http://www.adgvit.in/iwp/arrow.png") 0 0 no-repeat;
}
.button {
   border-top: 1px solid #090a0a;
   background: #222a30;
   background: -webkit-gradient(linear, left top, left bottom, from(#18191a), to(#222a30));
   background: -webkit-linear-gradient(top, #18191a, #222a30);
   background: -moz-linear-gradient(top, #18191a, #222a30);
   background: -ms-linear-gradient(top, #18191a, #222a30);
   background: -o-linear-gradient(top, #18191a, #222a30);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #787378;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ccc;
   }
.button:active {
   border-top-color: #000000;
   background: #000000;
   }

  </style>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
 
    

  <script type="text/javascript" src="http://adgvit.in/iwp/myjava.js"></script>

  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="mydiv2" >
<label id="webname" style="font-size:40px;color:white;"> Vit Social Network </label>
</div>

<form  name="changepasswordform" style="margin-top:160px;"  method="post" action="http://adgvit.in/iwp/password.php" enctype="multipart/form-data" class="login">
    <p>
      <label for="login" style="margin-left:31px;">Username:</label>
      <input type="text" name="change_username" id="change_username" placeholder="USERNAME">
    </p>

    <p>
      <label for="password"style="margin-left:5px;">Old Password:</label>
      <input type="password" name="change_oldpassword" id="change_oldpassword" placeholder="*******">
    </p>
    
       <p>
      <label for="password"style="margin-left:0px;">New Password:</label>
      <input type="password" name="change_newpassword" id="change_newpassword" placeholder="*******">
    </p>
    
    
   
    <p>
         <label for="register"></label>
 
    <input type="submit" class="button" style="margin-top:30px;margin-left:110px;" value="Change Passowrd" name="changepass" id="changepass" onclick="return validatechangepass()" />
</p>




     </form>

<?php
if(isset($_GET['errormsg']))
echo $_GET['errormsg'];
?>




     </form>
    


 </body>
</html>
