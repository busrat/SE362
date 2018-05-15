<?php
include('server.php');

include('comment.php');
@mysql_select_db("project", mysql_connect("localhost","root",""));
$username= $_SESSION['username'];
$comment = $_POST['comment'];
$code = $_POST['code'];
$comment_length = strlen($comment);
if($comment_length > 250) {
	header("location: comment.php?error=1");
}
else if($code=="" || $comment=="") { echo "Please fill al the fields."; }
else{
		mysql_query("INSERT INTO comments VALUES('$comment','$username','$code')");
        header("location: comment.php");
}
?>
