<div id="gform">

<p><b>User Login Form
<form action="" method="post">
<strong>User Name:</strong><br />
<input type="text" name="uname" /><br />

<strong>Password:</strong> <br />
<input type="password" name="pw" /><br />
<button>Enter</button>

</form>
</div>

<?php
session_start();

 @mysql_select_db("project", mysql_connect("localhost","root",""));

$uname = mysql_real_escape_string(@$_POST['uname']);

$pw = mysql_real_escape_string(@$_POST['pw']);

// $pw = md5($pw);

if($_POST){

    if($pw=="" || $uname==""){echo "<font color=blue><b>Please fill all the fields</font>";}

    else{

    $sql = mysql_query("SELECT * FROM account WHERE uname='$uname' and pw='$pw'");

    $dataCounter = mysql_num_rows($sql);

    if ($dataCounter>0){
        if($uname=$uname && $pw=$pw) {

        $_SESSION['uname'] = $uname;
        $_SESSION['pw'] = $pw;

        echo "<font color=green>You have successfully logged in</font>"."<br />"; }   

    }else{

        echo "<font color=red><b>Please check, user name or password is wrong.</font>";

    }
}
}

?>
