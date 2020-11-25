<?php

include('config.php');

$id_barang = $_POST['id_barang'];
$namabarang = $_POST['namabarang'];
$tglmasuk = $_POST['tglmasuk'];
$status = $_POST['status'];
$qty = $_POST['qty'];
$barcode = $_POST['barcode'];

$query  ="INSERT INTO barang VALUES ('$id_barang', '$namabarang','$barcode','$status','$qty','$tglmasuk')";
$result  = mysql_query ($query);
if($qty > 0 ){
echo '$status = tersedia';}
else{
echo '$status = tidak tersedia';}

if($query){
		header('location:barangmasuk.php?message=success');
}
?>