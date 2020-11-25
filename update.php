<?php
include('config.php');

$id =$_POST['id_barang'];
$namabarang =$_POST['namabarang'];
$status = $_POST['status'];
$tglmasuk = $_POST['tglmasuk'];
$qty = $_POST['qty'];
$barcode = $_POST['barcode'];

$query = mysql_query("update barang set namabarang='$namabarang',status='$status',barcode = '$barcode',qty = '$qty',tglmasuk='$tglmasuk' where id_barang='$id'") or die(mysql_error());

if ($query) {
	header('location:databarang.php?message=succes');
}
?>