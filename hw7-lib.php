<?php

// Name: hw7/hw7-lib.php
// Author: Shubham Mudgal
// Purpose: Library file for Tolkien application
// Version: 1.0
// Date: 03/13/2016

# This is the library file.
function connect(&$db){
	$mycnf = "/etc/hw5-mysql.conf";
	if(!file_exists($mycnf)){
		echo "ERROR: DB Config file not found: $mycnf";
		exit;
	}
	
	$mysql_ini_array = parse_ini_file($mycnf);
	$db_host = $mysql_ini_array["host"];
	$db_user = $mysql_ini_array["user"];
	$db_pass = $mysql_ini_array["pass"];
	$db_port = $mysql_ini_array["port"];
	$db_name = $mysql_ini_array["dbName"];
	$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
	
	if(!$db) {
		print "Error connecting DB: " . mysqli_connect_error();
		exit;
	}
}

function whiteList(){
	$ipAddressArray = array();
	array_push($ipAddressArray,'198.18.2.70');
	return $ipAddressArray;
}
?>
