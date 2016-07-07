<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
holas david
<body>

<?php

if(!isset($_SESSION["contador"])){
	$_SESSION["contador"] = 0;
}
else{
	$_SESSION["contador"] = $_SESSION["contador"] + 1;
}
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["favteam"] = "manchester";
echo "Session variables are set.";
?>
<?php echo $_SESSION["contador"] ?>
</body>
</html>
