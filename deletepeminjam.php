<?php 
include('config.php');

$id = $_GET['id'];
$query3  = mysql_query("delete from peminjam where nis='$id'") or die(mysql_error());

$result3 = mysql_query ($query3); 

if ($query3) {
	header('location:datapeminjam.php?message=delete');
}
?>