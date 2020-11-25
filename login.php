<!DOCTYPE html>
<?php
session_start();

if (!empty($_SESSION['username']))
header('location:blog.php');
?>
<html >
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/stylelogin.css" rel="stylesheet" type="text/css" />


<style>
</style>
<script src="js/prefixfree.min.js"></script>
</head>

<body>


<div class="body"></div>
<div class="grad"></div>
<div class="header">
<div>Login<span>First</span></div>
</div>
<br>

<form name="login" action="otentikasi.php" method="post">
<div class="login">
<div class="box">
<input type="text" placeholder="username" name="username"><br>
<input type="password" placeholder="password" name="password"><br>
<input type="submit" value="Login">
<?php

if(!empty($_GET['error'])){
if($_GET['error'] == 1){
echo '<h3>Username dan Password belum diisi</h3>';
} else if($_GET['error'] == 2){
echo '<h3>Username belum diisi</h3>';
} else if($_GET['error'] == 3){
echo '<h3>Password belum diisi</h3>';
} else if($_GET['error'] == 4){
echo '<h3>Username dan Password belum terdaftar</h3>';
}
}
?>
</div>	</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</form>



</body>
</html>
