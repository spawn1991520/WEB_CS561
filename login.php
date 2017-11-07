<?php session_start();
?>
<?php
include("conection.php");
include("registration.<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

</body>
</html>");
?>
<!--<?php
	//if (isset($_SESSION['loggedin'])/*checkAuth(true) != FALSE*/) {
?>
<h1>Not logged in</h1>
-->
<?php


if (checkAuth(true)){
	?>
	<h1>Log in successful!</h1>
<?php echo "<p>Current User: ".htmlspecialchars(checkAuth(false))."</p>"; ?>
<?php
}

if (isset($_SESSION['loggedin'])) { ?>
<h1>Login Successful</h1>
<?php } ?>