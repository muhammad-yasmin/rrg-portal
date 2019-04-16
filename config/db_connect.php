<?php
    $db = "portal";
	$user = "root";
	$password = "";
	$host = "localhost";

	$connect = new mysqli($host,$user,$password,$db);
	if ($connect->connect_errno) {
		echo $connect->connect_error;
	}