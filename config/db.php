<?php 
 
require "config.php";

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['ppassword'],
	$config['db']['name']

 );

 if ($connection == false) {
 	echo "Не получилось подключиться!!";
 	echo mysqli_connect_error();
 	exit();
 } 