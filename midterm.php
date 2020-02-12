<?php

$hostname = "localhost";
$username = "root";
$password ="";
$databaseName = "midterm";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
	echo 'no connection';
}

?>
