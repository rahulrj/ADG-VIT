<?php

// Inialize session
//session_start();

// Check, if username session is NOT set then this page will jump to login page
//if (!isset($_SESSION['username'])) {
header('Location: index.php');
//}

?>
<html>

<head>
<title>Secured Page</title>
</head>

<body>


<br>You can put your restricted information here.</p>


</body>

</html>