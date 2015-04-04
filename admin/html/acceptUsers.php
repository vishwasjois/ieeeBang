<style>
body{
	font-size: 1em;
	font-family: Roboto;
	padding: 10px;
	line-height: 2.5em;
}
</style>
<?php

include '../../connection.php';

$users = $_GET["accept"];

$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL Server");

foreach($users as $user){
	$query = "UPDATE users SET accepted=1 where id=$user";
	mysqli_query($dbc,$query);
}

if(isset($users)) echo "Thank you.</br>";
else echo "No users added to the database.</br>";
echo "<a href='users.php'>Go back to Admin page</a>";
?>