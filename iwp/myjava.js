function validateform()
{
var a=document.regform.password.value;
var b=document.regform.cpassword.value;
var c=document.regform.username.value;
if(a=="" || c=="")
{
alert('Enter the values ');
return false;
}
else
{
if(a==b)
{
document.regform.submit();
}
else
{
alert('passwords do not match');
return false;
}
}
}

function loginvalidate()
{

var name=document.loginform.login_username.value;
var password=document.loginform.login_password.value;
if(name==="")
{
alert('Enter the username ');
return false;
}
else
{
if(password==="")
{

alert('Enter the password');
return false;
}
else
{
document.loginform.submit();
}
}
}
function questionvalidate2()
{

var title=document.questionform.title.value;
var question=document.questionform.question.value;
if(title=="")
{
alert("Enter the title");
return false;
}
else
{
if(question=="")
{
alert("Enter the question");
return false;
}
else
{
document.questionform.submit();
}
}
}
function validatechangepass()
{
var a=document.changepasswordform.change_username.value;
var b=document.changepasswordform.change_oldpassword.value;
var c=document.changepasswordform.change_newpassword.value;
if(a=="" || c=="" || b=="")
{
alert('Enter the values ');
return false;
}
else
{

document.changepasswordform.submit();
}

}


