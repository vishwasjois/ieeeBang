<?php
ob_start();
include 'header.php';
include '../../connection.php';

$error_msg = "";

?>
<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<link rel="stylesheet" type="text/css" href="../css/style_report.css">
<div class="container">

<?php
if(!isset($_SESSION["id"])){
	if(isset($_POST["username"]) && isset($_POST["password"])){

		$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");

		$username = mysqli_real_escape_string($dbc,trim($_POST["username"]));
		$password = mysqli_real_escape_string($dbc,trim($_POST["password"]));
		$encrPass = password_hash($password, PASSWORD_DEFAULT);

		if(!empty($username) && !empty($password)) {
			$query = "SELECT * FROM users WHERE username='$username' AND accepted=1";
			$data = mysqli_query($dbc,$query);
			
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_array($data);
				if(password_verify($password,$row["password"])){
					session_start();
					$_SESSION["id"] = $row["id"];
					$_SESSION["name"] = $row["name"];
					$_SESSION["username"] = $row["username"];
					header("Location: ./report.php");
				}
			}			
			else {
				$error_msg = "Invalid username/password entered.";
			}
		}
		else {
			$error_msg = "Please enter username/password.";
		}
	}
?>

	<section>
		<p>Please log in to access the private area of this site.</p>
	</section>

	<div id="wrapper">
		<div class="row" id="form">
			<form id="login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<legend><h3>Log In</h3></legend>
				<div class="details"><figure id="uicon"></figure><input type="text" name="username" placeholder="Username" value="<?php if(!empty($username)) echo $username;?>" /></div><br>
				<div class="details"><figure id="picon"></figure><input type="password" name="password" placeholder="Password"/></div><br>
				<div class="details"><button type="submit" name="submit" id="btn">SIGN IN</button></div>
			</form>
			<?php
			if(empty($_SESSION["id"])) {
				echo "<p class='message'>$error_msg</p>";
			}
			?>
		</div>
	</div>

<?php
} else{
	session_start();
	if(!isset($_GET["hub"]) && !isset($_GET["college"])){
?>
	<div id="wrapperGrid">
	<div class="row">
		<div class="col-md-4"><a href="report.php?hub=bangalore"><div class="box">Bangalore Hub</div></a></div>
		<div class="col-md-4"><a href="report.php?hub=tumkur"><div class="box">Tumkur Hub</div></a></div>
		<div class="col-md-4"><a href="report.php?hub=mangalore"><div class="box">Mangalore Hub</div></a></div>
	</div>
	<div class="row">
		<div class="col-md-4"><a href="report.php?hub=nkarnataka"><div class="box">North Karnataka Hub</div></a></div>
		<div class="col-md-4"><a href="report.php?hub=mysore"><div class="box">Mysore Hub</div></a></div>
	</div>
	</div>
<?php
session_start();
	} elseif(!isset($_GET["college"])){

		$hub = strtolower($_GET["hub"]);

		if($hub == "bangalore"){
			echo "<div class='list'>";
			echo "<ul>";
			echo "<a href='report.php?hub=$hub&college=SVCE'><li>SVCE</li></a>";
			echo "<a href='report.php?hub=$hub&college=NMIT'><li>NMIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=PESIT'><li>PESIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=JSSATE'><li>JSSATE</li></a>";
			echo "<a href='report.php?hub=$hub&college=RNSIT'><li>RNSIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=BMSCE'><li>BMSCE</li></a>";
			echo "<a href='report.php?hub=$hub&college=BMSIT'><li>BMSIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=Reva'><li>Reva</li></a>";
			echo "<a href='report.php?hub=$hub&college=UVCE'><li>UVCE</li></a>";
			echo "<a href='report.php?hub=$hub&college=YDIT'><li>YDIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=MSRIT'><li>MSRIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=Oxford'><li>Oxford</li></a>";
			echo "<a href='report.php?hub=$hub&college=SKSJTI'><li>Govt. SKSJTI</li></a>";
			echo "<a href='report.php?hub=$hub&college=MSEC'><li>MSEC</li></a></ul></div>";
		} else if($hub == "tumkur"){
			echo "<div class='list'>";
			echo "<ul>";
			echo "<a href='report.php?hub=$hub&college=SIT'><li>SIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=SSIT'><li>SSIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=SIET'><li>SIET</li></a>";
			echo "<a href='report.php?hub=$hub&college=CIT'><li>CIT</li></a></ul></div>";
		} else if($hub == "mangalore"){
			echo "<div class='list'>";
			echo "<ul>";
			echo "<a href='report.php?hub=$hub&college=NITK'><li>NITK</li></a>";
			echo "<a href='report.php?hub=$hub&college=MIT'><li>MIT</li></a>";
			echo "<a href='report.php?hub=$hub&college=CEC'><li>CEC</li></a>";
			echo "<a href='report.php?hub=$hub&college=NMAMIT'><li>NMAMIT</li></a></ul></div>";
		} else if($hub == "nkarnataka"){
			echo "<div class='list'>";
			echo "<ul>";
			echo "<a href='report.php?hub=$hub&college=KLE'><li>KLE</li></a>";
			echo "<a href='report.php?hub=$hub&college=BVB'><li>BVB</li></a>";
			echo "<a href='report.php?hub=$hub&college=BEC'><li>BEC</li></a>";
			echo "<a href='report.php?hub=$hub&college=MMEC'><li>MMEC</li></a>";
			echo "<a href='report.php?hub=$hub&college=GIT'><li>GIT</li></a></ul></div>";
		} else if($hub == "mysore"){
			echo "<div class='list'>";
			echo "<ul>";
			echo "<a href='report.php?hub=$hub&college=PESCE'><li>PESCE</li></a>";
			echo "<a href='report.php?hub=$hub&college=SJCE'><li>SJCE</li></a>";
			echo "<a href='report.php?hub=$hub&college=NIE'><li>NIE</li></a>";
			echo "<a href='report.php?hub=$hub&college=VVIET'><li>VVIET</li></a>";
			echo "<a href='report.php?hub=$hub&college=VVCE'><li>VVCE</li></a></ul></div>";
		}
		echo "<a href='report.php' class='backLink'><div class='button'>Back to Hubs</div></a>";
	} else {

		$hub = strtolower($_GET["hub"]);
		$college = strtolower($_GET["college"]);

		if(isset($_GET["id"])){
			$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");

			$id = $_GET["id"];

			$query = "SELECT title,author,content FROM reports WHERE hub='$hub' AND college='$college' AND id=$id";
			$result = mysqli_query($dbc,$query);  

		    $data = mysqli_fetch_array($result);

		    $title = $data["title"];
		    $content = html_entity_decode($data["content"]);
		    $author = $data["author"];
		    $time = strtotime($data["timestamp"]);

		    echo "<div class='post'><h2>$title</h2>";
		    echo "<article>$content</article>";
		    echo "<p class='author'>Written by: $author</p></div>";
		    echo "<div class='back'><a href='index.php'>Back to Home Page</a></div>";
	    }
	    else{
	      $dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");
	      $query = "SELECT * FROM reports WHERE hub='$hub'";
	      $result = mysqli_query($dbc,$query);


	      while($row = mysqli_fetch_array($result)) {
	        $id = $row["id"];
	        $title = $row["title"];
	        $content = html_entity_decode($row["content"]);
	        $author = $row["author"];

	        if(strlen($content) >= 500) $contentIndex = substr($content, 0, 499) . "...<br><br><span class='readMore'><a href='index.php?id=$id'>Read more</a></span>";
	        else $contentIndex = $content;

	        $author = $row["author"];
	        $time = strtotime($row['timestamp']);

	        echo "<div class='post'><h2>$title</h2>";
	        echo "<article>$contentIndex</article>";
	        echo "<p class='author'>Written by: $author</p></div><hr>";
	      }

			if(mysqli_num_rows($result) < 1) {
				echo "<p>No reports found.</p>";
				echo "<a href='report.php?hub=$hub' class='backLink'><div class='button'>Back to Reports</div></a>";
			}
	      	else echo "<a href='report.php?hub=$hub' class='backLink'><div class='button'>Back to Reports</div></a>";
	    }
	}
}

include 'footer.php';
?>
