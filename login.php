
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
<?php include("footer.php");?>
test
