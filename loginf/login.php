<?php



// Include database connection settings


$hostname = '118.139.179.67';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
$dbname   = 'msgbrd'; // Your database name.
$username = 'msgbrd';             // Your database username.
$password = 'msgbrd1@A';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');



// Retrieve username and password from database according to user's input
$user=$_POST['loginEmail'];
//$user='rahul';
//$pass='raja';

$pass=$_POST['loginPassword'];

$login= mysql_query("Select username,password from login where username='$user' and password='$pass'");
/*$login = mysql_query("SELECT * FROM login WHERE (username = '" . mysql_real_escape_string($_POST['loginEmail']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['loginPass'])) . "')");*/

// Check username and password match
if (mysql_num_rows($login)) {
// Set username session variable
//$_SESSION['username'] = $_POST['username'];
// Jump to secured page
echo "good";

//header('Location: securedpage.php');
}
else {
// Jump to login page
//header('Location: index.php');
echo "bad";
}

?>