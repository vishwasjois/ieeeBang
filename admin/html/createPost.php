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
		mysql_query($dbc,$query);
		header("Location: ../html/dashboard.php");
	}
	else if($url == "reports.php"){
		$query = "INSERT INTO reports(title,author,content,hub,college) values ('$title','$author','$content','$hub','$college')";
		mysql_query($dbc,$query);
		header("Location: ../html/reports.php");	
	}
}

function sanitizeString($var){
	$var = stripcslashes($var);
	$var = htmlspecialchars($var);
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
					<br><label for="Hub">Hub</label>
					<input type="text" id="Hub" class="form-control" name="hub" placeholder="Enter Hub" required >
					<?php
					if($url == "reports.php"){
						echo '<br><label for="college">College</label>';
						echo '<input type="text" id="College" class="form-control" name="college" placeholder="Enter name of college" required >';
					}
					?>
					<br><label for="Author">Author</label>
					<input type="text" id="Author" class="form-control" name="author" placeholder="Enter Author's Name" required>
					<label for="editor" style="margin-bottom:10px;margin-top:25px;"> Content </label>
					
					
					<!--<div id="wysihtml5-editor-toolbar">
					  <header>
						<ul class="commands">
						  <li data-wysihtml5-command="bold" title="Make text bold (CTRL + B)" class="command"></li>
						  <li data-wysihtml5-command="italic" title="Make text italic (CTRL + I)" class="command"></li>
						  <li data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list" class="command"></li>
						  <li data-wysihtml5-command="insertOrderedList" title="Insert an ordered list" class="command"></li>
						  <li data-wysihtml5-command="createLink" title="Insert a link" class="command"></li>
						  <li data-wysihtml5-command="insertImage" title="Insert an image" class="command"></li>
						  <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" title="Insert headline 1" class="command"></li>
						  <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Insert headline 2" class="command"></li>
						  <li data-wysihtml5-command-group="foreColor" class="fore-color" title="Color the selected text" class="command">
							<ul>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
							  <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
							</ul>
						  </li>
						  <li data-wysihtml5-command="insertSpeech" title="Insert speech" class="command"></li>
						  <li data-wysihtml5-action="change_view" title="Show HTML" class="action"></li>
						</ul>
					  </header>
					  <div data-wysihtml5-dialog="createLink" style="display: none;">
						<label>
						  Link:
						  <input data-wysihtml5-dialog-field="href" value="http://">
						</label>
						<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
					  </div>

					  <div data-wysihtml5-dialog="insertImage" style="display: none;">
						<label>
						  Image:
						  <input data-wysihtml5-dialog-field="src" value="http://">
						</label>
						<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
					  </div>
					</div>-->
					
					<textarea id="editor" name="content" autofocus placeholder="Start writing..."></textarea>
					
					
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