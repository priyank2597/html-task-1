<?php
error_reporting(-1);
	ini_set('display_errors', 'On');



$conn = new mysqli("localhost","root","password","project") or die("Connect failed: %s\n". $conn -> error);
?>
