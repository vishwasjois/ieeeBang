<?php
include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="../css/style_register.css">      

	<div class="container">
      <section>
      	<h1>Registration Form</h1>
      	<hr>
	<?php

		include '../../connection.php';

		$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $sbNameErr = "";

		if(isset($_POST["submitted"])){
			$name = sanitizeString($_POST["name"]);
			$nameErr = validateName($name);

			$email = sanitizeString($_POST["email"]);
			$emailErr = validateEmail($email);

			$username = sanitizeString($_POST["username"]);
			$usernameErr = validateUsername($username);	

			$password = sanitizeString($_POST["password"]);
			$passwordErr = validatePassword($password);

			$confirmPassword = sanitizeString($_POST["confirmPassword"]);
			$confirmPasswordErr = validatePassword($confirmPassword);

			if($password != $confirmPassword) $err="The two passwords should match"; else $err="";

			$sbName = sanitizeString($_POST["sbName"]);
			$sbNameErr = validateName($sbName);

			$positionHeld = sanitizeString($_POST["positionHeld"]);
			$hubSelection = sanitizeString($_POST["hubSelection"]);

			/*echo $nameErr,$usernameErr,$passwordErr,$confirmPasswordErr,$err,$sbNameErr;*/

			if($nameErr=="" && $usernameErr=="" &&$passwordErr=="" && $confirmPasswordErr=="" && $err=="" && $sbNameErr==""){

				$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");
				
				$name = mysqli_real_escape_string($dbc,$name);
				$username = mysqli_real_escape_string($dbc,$username);
				$sbName = mysqli_real_escape_string($dbc,$sbName);
				$positionHeld = mysqli_real_escape_string($dbc,$positionHeld);
				$hubSelection = mysqli_real_escape_string($dbc,$hubSelection);
				$encrPass = password_hash($password, PASSWORD_DEFAULT);
				
				$query1 = "SELECT * FROM users WHERE email='$email'";
				$data = mysqli_query($dbc,$query1);

				if(mysqli_num_rows($data) == 1){
					$msg = "The email address is already registered.";
				} else{
					$query2 = "SELECT * FROM users WHERE username='$username'";
					$data = mysqli_query($dbc,$query2);

					if(mysqli_num_rows($data) == 1){
						$msg = "The username already exists.";
					} else{
							$query = "INSERT INTO users VALUES(0,'$name','$email','$username','$encrPass','$sbName','$positionHeld','$hubSelection',0)";
							mysqli_query($dbc,$query);
							$msg = "Thank you for registering.";
					}					
				}		
				mysqli_close($dbc);
				echo "<p style='text-align: left'>$msg</p>";
			}
			$password = $confirmPassword = "";
		}

		function validateName($name){
			if(!preg_match("/^[a-zA-Z ]*$/", $name)){
					return "*Name can only contain alphabets and white space";
			}
			return "";
		}

		function validateEmail($email){
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			return "*Invalid email format"; 
      		}
      		return "";
		}

		function validateUsername($username){
			if(!preg_match("/^[a-zA-Z0-9_-]{3,15}$/",$username)){
					return "*Username can contain letters,numbers,underscores, hypens and should have 3-15 letters";
				}
			return "";
		}

		function validatePassword($field){
			if (strlen($field) < 6)
					return "*Passwords must be at least 6 characters<br />";
			else if ( !preg_match("/[a-z]/", $field) || !preg_match("/[A-Z]/", $field) || !preg_match("/[0-9]/", $field))
					return "*Passwords require 1 each of a-z, A-Z and 0-9<br />";
			return "";
		}

		function sanitizeString($var){
			$var = stripcslashes($var);
			$var = htmlspecialchars($var);
			$var = trim($var);
			$var = strip_tags($var);
			return $var;
		}
		?>
		<fieldset>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
			<div class="formField">
				<label for="name">Name:</label>
				<input type="text" required name="name" value="<?php if(isset($name)) echo $name; ?>"/>
				<span class="error"><?php echo $nameErr ?></span>
			</div>
			<div class="formField">
				<label for="email">Email:</label>
				<input type="email" required name="email" value="<?php if(isset($email)) echo $email; ?>"/>
				<span class="error"><?php echo $emailErr; ?></span>
			</div>
			<div class="formField">
				<label for="username">Username:</label>
				<input type="text" required name="username" value="<?php if(isset($username)) echo $username; ?>"/>
				<span class="error"><?php echo $usernameErr; ?></span>
			</div>
			<div class="formField">
				<label for="password">Password:</label>
				<input type="password" required name="password" value="<?php if(isset($password)) echo $password; ?>"/>
				<span class="error"><?php echo $passwordErr; ?></span>
			</div>
			<div class="formField">
				<label for="confirmPassword">Verify Password:</label>
				<input type="password" required name="confirmPassword" value="<?php if(isset($confirmPassword)) echo $confirmPassword; ?>"/>
				<span class="error"><?php echo $confirmPasswordErr; ?></span>
			</div>
			<div class="formField">
				<label for="sbName">Student Branch Name:</label>
				<input type="text" name="sbName" value="<?php if(isset($sbName)) echo $sbName; ?>"/>
				<span class="error"><?php echo $sbNameErr; ?></span>
			</div>
			<div class="formField">
				<label for="positionHeld">Position Held:</label>
				<select name="positionHeld">
					<option value="Branch Counselor">Branch Counselor</option>
					<option value="Chairperson">Chairperson</option>
					<option value="Vice-Chairperson">Vice-Chairperson</option>
					<option value="General Secretary">General Secretary</option>
					<option value="Treasurer">Treasurer</option>
					<option value="GINI Representative">GINI Representative</option>
					<option value="Member">Member</option>
				</select>
			</div>
			<div class="formField">
				<label for="hubSelection">Hub Selection:</label>
				<select name="hubSelection">
					<option value="Bangalore Hub">Bangalore Hub</option>
					<option value="Tumkur Hub">Tumkur Hub</option>
					<option value="Mysore Hub">Mysore Hub</option>
					<option value="North Karnataka Hub">North Karnataka Hub</option>
					<option value="Mangalore Hub">Mangalore Hub</option>
				</select>
			</div>
			<input type="hidden" name="submitted" value="yes"/>
			<div class="formField"><input type="submit" name="submit" value="Register"/></div>
		</form>
	</fieldset>
     </section>
    </div>    
   
<?php

include 'footer.php';

?>
