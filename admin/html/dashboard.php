<?php
include 'header.php';
include '../php/session.php';
				
$result = mysqli_query($dbc,"SELECT * FROM posts order by 'timestamp' desc");
$location = substr($_SERVER["REQUEST_URI"],17);
?>
<link href="../css/style_dash.css" rel="stylesheet">

		<div id="main">
			<div id="content">
				<div id="box"> 
					<h2> Dashboard </h2>
					
					<table id="poststbl" class="table table-bordered table-hover">
						<caption> 
							Posts:
							<span><a href="../html/createPost.php?url=<?php echo $location ?>"><p>+ New Post</p><figure></figure></a></span>
						</caption>
						<div id="head"><thead>
							<tr>
								<td> Title </td>
								<td> Author </td>
								<td> Date Created</td>
								<td></td>
							</tr>
						</thead><div>
						<tbody>
							<?php
								while($row = mysqli_fetch_array($result)) {
									$time = strtotime($row['timestamp']);
									if(strlen($row["title"])>10) $title = substr($row["title"],0,10) . "...";
									else $title = $row["title"];

									echo "<tr> <td> <a href='#pcontent".$row['id']."' class='boxer'  data-boxer-height='500' data-boxer-width='500'>".$title."</a></td> <td>".$row['author']."</td> <td>".date('D, j M Y, g:iA',$time)."</td>";
									echo "<td><a class='edit' href='../html/editPost.php?i=".$row['id']."&url=$location' data-title='Edit Post'><img src='../img/edit.png' style='margin-right: 7.5px'></a>  <a class='delete' href='../php/deletePost.php?i=".$row['id']."' data-title='Delete Post'><img src='../img/trash.png'></a></td></tr>";
									echo "<div id='pcontent".$row['id']."' style='display:none;'><div class='content'>";
									echo "<h3 class='ptitle'>".$row['title']." <a class='edit' href='../html/editPost.php?i=".$row['id']."&url=$location' data-title='Edit Post'><img src='../img/edit.png' style='height:15px;'></a>  <a class='delete' href='../php/deletePost.php?i=".$row['id']."' data-title='Delete Post'><img src='../img/trash.png' style='height:15px;'></a></h3> <h6>By ".$row['author']."</h6><p class='ptext'>".html_entity_decode($row['content'])."</p></div></div>";
								}
							?>
						</tbody>
					</table>
				
				</div>
			</div>
<?php
include 'footer.php';
?>
<script>
$(document).ready(function(){
	//var pos = $("table#poststbl").offset().top + $("table#poststbl").height() + "px";
	// var pos = $("tr::last-child").offset().top;
	// alert(pos);
	// $("div#footer").css("top",pos);
})
</script>