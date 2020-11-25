<?php 
include('config.php');

$id = $_GET['id'];

$query   = mysql_query("delete from barang where id_barang='$id' ") or die(mysql_error());
$query2  = mysql_query("delete from peminjam where nis='$id'") or die(mysql_error());
$result  = mysql_query ($query);
$result2 = mysql_query ($query2); 

if ($query) {
	header('location:databarang.php?message=delete');
}
?>