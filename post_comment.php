<?php
@mysql_select_db("project", mysql_connect("localhost","root",""));
$username = $_POST["username"];
$comment = $_POST["comment"];
$comment_length = strlen($comment);
if($comment_length > 100) {
	header("location: comment.php?error=1");
}
else
{
		mysql_query("INSERT INTO comments VALUES('$code','$comment','$username')");
        header("location: comment.php");
}

?>
