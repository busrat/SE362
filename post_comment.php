<?php
include('server.php');
include('search.php');
@mysql_select_db("project", mysql_connect("localhost","root",""));

$username= $_SESSION['username'];
$comment = $_POST['comment'];
$comment_length = strlen($comment);
if($comment_length > 250) {
	header("location: comment.php?error=1");
}
else
{
		mysql_query("INSERT INTO comments VALUES('$comment','$username')");
        header("location: comment.php");
}
?>
