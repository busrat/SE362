<?php include('server.php'); 
if(empty($_SESSION['username'])){
	header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration System using PHP and MySQL</title>
	<link rel= "stylesheet" type="test/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Home page</h2>
</div>

<div class="content">
<?php if (isset($_SESSION['success'])): ?>
<div class="error success">
<h3>
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>
<?php if (isset($_SESSION["username"])): ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
<?php endif ?>
</div>
</body>
</html>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
echo "<font color=green>You have been successfully logged in</font>"."<br /><br />";
?>

	<form action="search.php" method="POST">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
    </form>
    <a href="logout.php"><br />Click here to logout</a>

</body>
</html>
