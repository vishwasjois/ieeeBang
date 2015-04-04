<?php
include 'header.php';
include '../php/session.php';
				
?>
<link href="../css/style_users.css" rel="stylesheet">	

		<div id="main">
			<div id="content">
				<div id="box"> 
					<h2> Users </h2>
					
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
					<?php 

					include '../../connection.php';

					$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL Server");

					if(isset($_POST["submit"])){
						$users = $_POST["accept"];

						foreach($users as $user){
							$query = "UPDATE users SET accepted=1 where id=$user";
							mysqli_query($dbc,$query);
						}

						if(isset($users)) echo "<p>Thank you.</p></br>";
						else echo "<p>No users added to the database.</p></br>";
					}
					//$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");

					$query = "SELECT * FROM users";
					$result = mysqli_query($dbc,$query);

					echo "<table class='table table-hover table-bordered'><tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Student Branch Name</th><th>Position Held</th><th>Hub Selection</th><th>Accepted</th></tr>";

					while($row = mysqli_fetch_array($result)){
						if($row['accepted']==1) {$accValue = 'checked disabled readonly';$class='class="success"';}
						else {$accValue = '';$class='';}
						echo "<tr $class><td>".$row["id"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["username"]."</td>";
						echo "<td>".$row["sbName"]."</td>";
						echo "<td>".$row["positionHeld"]."</td>";
						echo "<td>".$row["hubSelection"]."</td>";
						echo "<td><input type='checkbox' name='accept[]' value=".$row['id']." $accValue/></td></tr>";
					}

					echo "</table>";
					?>

					<input type="submit" class="btn btn-default" id="btn" value="Add selected users to IEEE database" name="submit"/>
					</form>
					
				</div>
			</div>
			
<?php
include 'footer.php';
?>