<?php 
	session_start();
	
	include '../php/sql.php';
	/*
	if(!isset($_SESSION['admin_log'])) {
		session_destroy();
		header("location:".$location."/index.php");
	}
	
	$inactive = 3600; //60 minutes timeout

	if(isset($_SESSION['timeout'])) {
		$session_life = time() - $_SESSION['timeout'];
		if($session_life > $inactive) { 
			header("location: ../php/logout.php"); 
		}
	}
	
	$_SESSION['timeout'] = time();
	*/
?>