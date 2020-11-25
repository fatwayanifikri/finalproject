<?php
include('config.php');


$id = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$barangpinjam = $_POST['barangpinjam'];
$barcode= $_POST['barcode'];
$jumlah=$_POST['jumlah'];

$tgl_pinjam= $_POST['tgl_pinjam'];


$query = mysql_query("update peminjam set nama='$nama',kelas='$kelas',barangpinjam = '$barangpinjam',
barcode='$barcode',jumlah='$jumlah',jam='$jam',tgl_pinjam='$tgl_pinjam' where nis='$id'") or die(mysql_error());

if ($query) {
	header('location:datapeminjam.php?message=succes');
}
?>