<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_SESSION["contador"])){
	$_SESSION["contador"] = 0;
}
else{
	$_SESSION["contador"] = $_SESSION["contador"] + 1;
}
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
echo "Favorite team is " . $_SESSION["favteam"] . ".";
?>
<?php echo $_SESSION["contador"] ?>
</body>
</html>