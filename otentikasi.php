<?php
include('config.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


if(empty($username) && empty($password)){
	
		header('location:login.php?error=1');
		break;
} else if(empty($username)){
	
		header('location:login.php?error=2');
		break;
} else if(empty($password)){
		
		header('location:login.php?error=3');
		break;
}

$q = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");

if(mysql_num_rows($q) == 1){
		
		$_SESSION['username'] = $username;
		
		header('location:index.php');
		
	
		header('location:index.php');
		} else{
		
	
		header('location:login.php?error=4');
		}

?>