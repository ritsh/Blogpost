<?php
include '../core/init.php';
if(isset($_POST['comment']))

{  $comment=$_POST['comment'];
	mysql_query("INSERT into blog(comment) VALUES('".$comment."')");
echo "success";
}

?>