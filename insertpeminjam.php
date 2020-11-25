<?php

include('config.php');

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$barangpinjam = $_POST['barangpinjam'];
$jumlah=$_POST['jumlah'];
$barcode= $_POST['barcode'];
$tgl_pinjam= $_POST['tgl_pinjam'];
$jam= $_POST['jam'];
$qty= $_POST['qty'];
$namabarang = $_POST['namabarang'];

$query ="INSERT INTO peminjam VALUES ('$nis','$nama','$kelas','$barangpinjam','$jumlah','$barcode','$tgl_pinjam','$jam')";
$query2 ="INSERT INTO transaksi VALUES ('$nis','$nama','$kelas','$barangpinjam','$jumlah','$barcode','$tgl_pinjam','$jam')";
$result  = mysql_query ($query);
$result2  = mysql_query ($query2);
if($query){
		header('location:masukannis.php?message=success');
}
?>