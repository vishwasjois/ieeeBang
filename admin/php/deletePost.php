<?php
	include "../php/session.php";

	$query = "delete from posts where id=".$_GET['i'];
	$result = mysqli_query($dbc,$query);

	header('Location: ../html/dashboard.php');
?>