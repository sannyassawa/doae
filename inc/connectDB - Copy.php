<?php

	//$hostname_loxdata = "172.22.1.82";
	$hostname_loxdata = "localhost";
	$username_loxdata = "root";
	//$password_loxdata = "1234";
	$password_loxdata = "";
	$database_loxdata = "db_doae";

	function begin_trans($conn) {
		return mysql_query("BEGIN TRAN",$conn);
	}
	
	function commit_trans($conn) {
		return mysql_query("COMMIT TRAN",$conn);	
	}
	
	function rollback_trans($conn) {
		return mysql_query("ROLLBACK TRAN",$conn);
	}
	$conn = mysql_pconnect($hostname_loxdata, $username_loxdata, $password_loxdata);
	if (!$conn) {
		echo "Could not connect to database server!!";
		exit;
	} else {
		$db = mysql_select_db($database_loxdata, $conn);
		if (!$db) {
			echo "Could not connect to database!!";
			exit;
		}
	}
	
	$cs1 = "SET character_set_results=utf8";
	mysql_query($cs1) or die('Error query: ' . mysql_error()); 

	$cs2 = "SET character_set_client = utf8";
	mysql_query($cs2) or die('Error query: ' . mysql_error()); 

	$cs3 = "SET character_set_connection = utf8";
	mysql_query($cs3) or die('Error query: ' . mysql_error());
?>