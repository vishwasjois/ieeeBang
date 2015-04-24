		<?php 
			include '../php/session.php';
			include 'header.php';
				
			$id = $_GET["i"];
			$url = $_GET["url"];

			if($url == "dashboard.php"){
				$result = mysqli_query($dbc,"SELECT * FROM posts where id=$id");
			} else if($url == "reports.php"){
				$result = mysqli_query($dbc,"SELECT * FROM reports where id=$id");
			}
			
			$row = mysqli_fetch_array($result);
			
			$id = $_GET["i"];
			$url = $_GET["url"];
			$title = mysqli_real_escape_string($dbc,sanitizeString($_POST["title"]));
			$author = mysqli_real_escape_string($dbc,sanitizeString($_POST["author"]));
			$hub = mysqli_real_escape_string($dbc,sanitizeString($_POST["hub"]));
			$college = mysqli_real_escape_string($dbc,sanitizeString($_POST["college"]));
			$content = mysqli_real_escape_string($dbc,$_POST["content"]);

			if(isset($_POST["submit"])) {
				if($url == "dashboard.php"){
					mysqli_query($dbc,"UPDATE posts set title = '$title' where id='$id'");
					mysqli_query($dbc,"UPDATE posts set author = '$author' where id='$id'");
					mysqli_query($dbc,"UPDATE posts set content = '$content' where id='$id'");
					header("Location: ../html/dashboard.php");
				} else if($url == "reports.php"){
					mysqli_query($dbc,"UPDATE reports set title = '$title' where id='$id'");
					mysqli_query($dbc,"UPDATE reports set author = '$author' where id='$id'");
					mysqli_query($dbc,"UPDATE reports set hub = '$hub' where id='$id'");
					mysqli_query($dbc,"UPDATE reports set content = '$content' where id='$id'");
					mysqli_query($dbc,"UPDATE reports set college='$college' where id='$id'");
					header("Location: ../html/reports.php");
				}
			}

			function sanitizeString($var){
				$var = stripcslashes($var);
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
						<h2> Edit Post </h2>
						
						
						<form role="form" id="editform" method="POST" action='../html/editPost.php?<?php echo "i=$id&url=$url" ?>' >
							<div class="form-group">
								<label for="Title">Title</label>
								<input type="text" id="Title" class="form-control" name="title" required value="<?php echo $row['title'];?>">
								<?php
								if($url == "reports.php"){
									echo '<br><label for="Hub">Hub</label>';
									$hub = $row['hub'];
									echo '<input type="text" id="Hub" class="form-control" name="hub" placeholder="Enter Hub" required value="<?php echo $hub ?>">';
									echo '<br><label for="college">College</label>';
									echo '<input type="text" id="College" class="form-control" name="college" placeholder="Enter name of college" required value="'.$row["college"].'">';
								}
								?>
								<br><label for="Author">Author</label>
								<input type="text" id="Author" class="form-control" name="author" value="<?php echo $row['author'];?>">
								<label for="editor" style="margin-bottom:10px;margin-top:25px;"> Content </label>
		
								<textarea id="editor" name="content" autofocus placeholder="Start writing..."><?php	echo $row['content'];?></textarea>
														
								<input type="submit" class="btn btn-default" name="submit" style="margin-top:20px;" value="Save" />
							
							</div>
						</form>
					
					</div>
				</div>

<script type="text/javascript" src="../jquery_te/jquery-te-1.4.0.min.js"></script>
<script>

$(document).ready(function(){
	$("textarea#editor").jqte();
})

</script>
<?php
include 'footer.php';
?>