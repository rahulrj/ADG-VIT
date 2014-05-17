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