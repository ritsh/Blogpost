<?php
function getComments()
{
$comments=array();
$query=mysql_query('SELECT comment_id,comment FROM blog');

while(($row=mysql_fetch_assoc($query))!== false)
{
$comments[]= array(
	'comment_id' =>$row['comment_id'] ,
	'comment' => $row['comment'] );

}
return $comments;
die( mysql_error());
}
?>