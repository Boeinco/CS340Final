<?php
	include 'connectvarsEECS.php';
	session_start();	

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	if(isset( $_SESSION['username'])){
		echo json_encode($_SESSION['username']);
		return;
	}
	else{
		echo json_encode('Not logged in');	
	}

	return;
?>
