<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php include('server.php');  
if(!empty($_SESSION['username'])){
	echo "You are already logged in!";?>
	<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	Wanna start searching? <a href="index.php">Click here!</a>
	<?php exit; 
}?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>


<form method="post" action="login.php">
<?php include('errors.php'); ?>
<div class ="input-group">
<label>User Name:</label>
<input type="text" name="username" />
</div>
<div class ="input-group">
<label>Password:</label> 
<input type="password" name="password" />
</div>
<div class ="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p>
Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>
</body>
</html>
<?php
 @mysql_select_db("project", mysql_connect("localhost","root",""));
$username = mysql_real_escape_string(@$_POST['username']);
$password = mysql_real_escape_string(@$_POST['password']);
$password = md5($password);
if($_POST){
    if($password=="" || $username==""){echo "<font color=blue><b>Please fill all the fields</font>";}
    else{
    $sql = mysql_query("SELECT * FROM account WHERE username='$username' and password='$password'");
    $dataCounter = mysql_num_rows($sql);
    if ($dataCounter>0){
        if($username=$username && $password=$password) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['login'] = true;
		header('location: index.php');}   
    
    }
	
}
}
?>
