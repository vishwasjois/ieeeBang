<?php 
include '../php/session.php';
include 'header.php';

$title = mysqli_real_escape_string($dbc,sanitizeString($_POST["title"]));
$author = mysqli_real_escape_string($dbc,sanitizeString($_POST["author"]));
$hub = mysqli_real_escape_string($dbc,sanitizeString($_POST["hub"]));
$college = mysqli_real_escape_string($dbc,sanitizeString($_POST["college"]));
$content = mysqli_real_escape_string($dbc,$_POST["content"]);

$url = $_GET["url"];
if(isset($_POST["submit"])) {

	if($url == "dashboard.php"){
		$query = "INSERT INTO posts(title,author,content) values ('$title','$author','$content')";
		mysqli_query($dbc,$query);
		header("Location: ../html/dashboard.php");
	}
	else if($url == "reports.php"){
		$query = "INSERT INTO reports(title,author,content,hub,college) values ('$title','$author','$content','$hub','$college')";
		mysqli_query($dbc,$query);
		header("Location: ../html/reports.php");	
	}
}

function sanitizeString($var){
	$var = stripcslashes($var);
	//$var = htmlspecialchars($var);
	$var = trim($var);
	$var = strip_tags($var);
	return $var;
}
?>
	
<link href="../css/editorstyle.css" rel="stylesheet">

<link href="../css/style_editpost.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../jquery_te/jquery-te-1.4.0.css">

<div id="main">
	<div id="content">
		<div id="box"> 
			<h2> Create Post </h2>
			
			
			<form role="form" id="editform" method="POST" action='<?php echo $_SERVER['PHP_SELF']."?url=$url" ?>'>
				<div class="form-group">
					<label for="Title">Title</label>
					<input type="text" id="Title" class="form-control" name="title" placeholder="Enter Title" required>
					<?php
					if($url == "reports.php"){
						echo '<br><label for="Hub">Hub</label>';
						echo '<input type="text" id="Hub" class="form-control" name="hub" placeholder="Enter Hub" required >';
						echo '<br><label for="college">College</label>';
						echo '<input type="text" id="College" class="form-control" name="college" placeholder="Enter name of college" required >';
					}
					?>
					<br><label for="Author">Author</label>
					<input type="text" id="Author" class="form-control" name="author" placeholder="Enter Author's Name" required>
					<label for="editor" style="margin-bottom:10px;margin-top:25px;"> Content </label>
							
					<textarea id="editor" name="content" autofocus placeholder="Start writing..."></textarea>
					
					<input type="submit" class="btn btn-default" name="submit" style="margin-top:20px;" value="Save" />
				</div>
			</form>
		
		</div>
		<?php
		include 'footer.php';
		?>		
			
	</div>

<script type="text/javascript" src="../jquery_te/jquery-te-1.4.0.min.js"></script>
<script>

$(document).ready(function(){
	$("textarea#editor").jqte();
})

</script>
