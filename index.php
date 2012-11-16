<?php
include 'core/init.php';
?>
<!DOCTYPE html>
<head> 
<title>Blog Comment</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/sendComment.js"></script>
</head>
<body>
	<span >
<?php
$comments=getComments();

  echo "<ul id='comments'>";
  foreach ($comments as $comment) {
    

    echo "<li>".$comment['comment']."</li>";
}
echo "</ul>";

?>
	</span>
	
<textarea id="writeComment"></textarea>
<input type="submit" value="submit" onclick="comment()"> 

</body>
</html>