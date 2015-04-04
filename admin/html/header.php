<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<title> IEEE: Bangalore </title>
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
		
	<link href="../css/normalize.css" rel="stylesheet">
	
	<link href="../css/jquery.fs.naver.min.css" rel="stylesheet">
	
	<link href="../css/jquery.fs.boxer.min.css" rel="stylesheet">
	
	<link href="../css/jquery.fs.tipper.min.css" rel="stylesheet">
	
	<link href="../css/style_common.css" rel="stylesheet">
	
	</head>
	
	<body>
	
		<div id="header"> 
			<img src="../img/ieeelogo.jpg"> 
			<div id="headerText"> 
				<h1 id="head"> Bangalore Section </h1>
				<h2 id="subhead"> SAC Collaboration Platform </h2>
			</div>
		</div>

		<nav id="navbar">
			<a class='btn' href="../html/dashboard.php">Dashboard</a>
			<a class='btn' href="../html/reports.php">Reports</a>
			<a class='btn' href="../html/users.php">Accept Users</a>
			<?php 
				session_start();
				
				if(isset($_SESSION['admin_log'])){
					echo "<a class='btn' id='logout' href='../php/logout.php'>Logout</a>";
				}

			?>
		</nav>
		
		<script src="../js/jquery-2.1.1.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>
		<script src="../js/jquery.fs.naver.min.js"></script>
		<script src="../js/jquery.fs.boxer.min.js"></script>
		<script src="../js/jquery.fs.tipper.min.js"></script>
			