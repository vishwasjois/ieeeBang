	<?php
		session_start();
		
		include 'header.php';
		include '../php/sql.php';
		
		if(isset($_SESSION['admin_log'])) {
			header("location:".$location."/dashboard.php");
		}
		
		$passhash = password_hash("ieee5102", PASSWORD_DEFAULT); //username = Admin ; pass = ieee5102
	
		if(isset($_POST["u"]) && isset($_POST["p"]) )
		{
			if($_POST["u"]!="" && $_POST["u"] == "Admin" && password_verify($_POST["p"],$passhash)) {
				$_SESSION["admin_log"] = time();
				header("location:".$location."/dashboard.php");
			}
			else
				header("location:".$location."/index.php?signin=false");
		}
	?>
	<link rel="stylesheet" type="text/css" href="../css/style_home.css">	
		<div id="content">
		<?php echo $msg ?>
			<div id="box"> 
				<h1> Administrator </h1>
				<form role="form" method="POST" action="index.php">
					<div class="form-group" id="login">
						<label for="user">Username</label>
						<input type="text" class="form-control" id="user" name = "u">

						<label for="pass">Password</label>
						<input type="password" class="form-control" id="pass" name = "p">
					</div>
					<div>
						<?php
							if(isset($_GET['signin']))
								echo '<span style="color: red;font-size: 14px;display: block;margin-left: 12px;"> Incorrect Details. Please try again. </span>';
						?>
						<input id="loginbtn" type ="submit" class ="btn btn-default btn-lg" value="login">
					</div>
				</form>
			</div>
		</div>
		
<?php
include 'footer.php';
?>