<div id="gform">

<p><b>User Login Form
<form action="" method="post">
<strong>User Name:</strong><br />
<input type="text" name="username" /><br />

<strong>Password:</strong> <br />
<input type="password" name="password" /><br />
<button>Enter</button>

</form>
</div>

<?php
session_start();
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
        echo "<font color=green>You have successfully logged in</font>"."<br />"; 
		header('location: index.php');}   
    }else{
        echo "<font color=red><b>Please check, username or password is wrong.</font>";
    }
	
}
}
?>
