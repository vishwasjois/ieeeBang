<!-- Made by students of IEEE Student Branch Manipal

Raunak Manjani
Dhruv Agarwal
Bhavarth Chauhan
Suyash Shetty

-->


<?php
include 'header.php';
include '../../connection.php';
?>
<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<div class="container">
  <?php

    if(isset($_GET["id"])){
      $dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");

      $id = $_GET["id"];

      $query = "SELECT * FROM posts where id=$id";
      $result = mysqli_query($dbc,$query);  

      $data = mysqli_fetch_array($result);

      $title = $data["title"];
      $content = html_entity_decode($data["content"]);
      $author = $data["author"];
      $time = strtotime($data["timestamp"]);

      echo "<div class='post'><h2>$title</h2>";
      echo "<article>$content</article>";
      echo "<p class='author'>Written by: $author</p></div>";
      echo "<div class='button'><a href='index.php'>Back to Home Page</a></div>";

    }
    else{
      $dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");
      $query = "SELECT * FROM posts";
      $result = mysqli_query($dbc,$query);


      $resultsPerPage = 10;
      $curPage = isset($_GET["page"])?$_GET["page"]:1;
      $skip = ($curPage - 1) * $resultsPerPage;
      $total = mysqli_num_rows($result);
      $numPages = ceil($total / $resultsPerPage);

      $query = "SELECT * FROM posts LIMIT $skip,$resultsPerPage";
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
     
      function generatePageLinks($curPage,$numPages){
    
        if($curPage > 1){
          $pageLinks .=  "<a href='" . $_SERVER['PHP_SELF'] . "?page=" . ($curPage-1) . "'><li><figure id='leftNav'></figure></li></a>";
        } else{
          $pageLinks .= "<li><figure id='leftNav'></figure></li>";
        }

        for($i = 1; $i <= $numPages; $i++) {
          if($curPage == $i){
            $pageLinks .= "<li style='color: silver'>$i</li>";
          } else{
            $pageLinks .=  "<a href='" . $_SERVER['PHP_SELF'] . "?page=" . $i . "'><li>$i</li></a>";
          }
        }

        if($curPage < $numPages){
          $pageLinks .=  "<a href='" . $_SERVER['PHP_SELF'] . "?page=" . ($curPage+1) . "'><li><figure id='rightNav'></figure></li></a>";
        } else{
          $pageLinks .= "<li><figure id='rightNav'></figure></li>";
        }

        return "<ul id='paginate'>" .$pageLinks . "</ul>";
      }

      if($numPages > 1) {echo "<div id='pages'>" . generatePageLinks($curPage,$numPages) . "</div>";}
    }

include 'footer.php';

?>  
