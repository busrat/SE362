
<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}

/* session_start();
session_unset();
session_destroy();
ob_start();
header("location:login.php"); 
//burası da home olacak ilerde
ob_end_flush(); 
include 'login.php';
//include 'home.php';
exit(); */

?>

