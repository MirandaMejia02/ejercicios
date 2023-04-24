<?php
if(isset($_POST['celsius'])) {
	$celsius = $_POST['celsius'];
	$fahrenheit = ($celsius * 9/5) + 32;
	echo "$celsius grados Celsius son $fahrenheit grados Fahrenheit.";
}
?>