<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <?php 
	 include('server.php');
	 include_once("menu.php"); 
	 if(empty($_SESSION['username'])){
		 echo "You cannot comment on the courses without logging in.";
exit;
} ?>
</head>


<html>
<form action="post_comment.php" method="POST"> 
    <input type="text" name="code" value="Code of the course" onfocus="this.value==defaultValue?this.value='':null"><br>
    <textarea name="comment" cols="50" rows="2" onfocus="this.value==defaultValue?this.value='':null">Enter a comment</textarea>
    <input type="submit" value="Comment">

</form>
</html>

