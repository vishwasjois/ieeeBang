<?php
	session_start();
	session_destroy();
	
	include '../php/sql.php';
	
	header("location: ../html/report.php");
?>
