<!DOCTYPE html>
<?php
include('config.php');
?>

<?php
include('ceklogin.php');
?>
<html lang="en">
<head>
<title>Program</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style2.css">
<script src="js/jquery.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function(){
$().UItoTop({ easingType: 'easeOutQuart' });
$('#stuck_container').tmStickUp({});
});

</script>
</head>

<body>

<!--==============================
header
=================================-->
<header>
<div class="header_top">
<div class="container">
<div class="row">
<div class="grid_12">
<h1><a href="#">Peminjaman Barang <br> Sarana dan Prasarana </a></h1>
by Fatwa's
</div>
</div>
</div>
</div>
<section id="stuck_container">
<!--==============================
Stuck menu
=================================-->

<div class="container">
<div class="row">
<div class="grid_12 ">
<h1 class="logo">
<a href="index.html">

</a>
</h1>
<div class="navigation ">
<nav>
<ul class="sf-menu">
<li><font size="3"><a href="index.php">Home Page</a></li></font>
<li><font size="3"><a href="barangmasuk.php">Masukan Data Barang</a></li></font>
<li><font size="3"><a href="databarang.php">Data Barang</a></li></font>
</ul>
</nav>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</section>
</header>
<!--=====================
Content
======================-->

<section id="content"><div class="ic"></div><center><h2> Data Barang </h2></center>
<div id='table-a'>
<table align="center" border=35 cellpadding=1 cellspacing=0 width="100%" color="transparent">
<thead><font color="white">
<tr>
<th>No.</th>
<th>Id</th>
<th>Nama Barang</th>
<th>Status</th>
<th>Jumlah Barang</th>
<th>Tanggal Masuk</th>
<th>Opsi</th>

</tr>

</head>
<tbody>

<?php
	$idbar= @$_POST['id_barang'];
		$query = mysql_query("SELECT * from barang where namabarang like '%$idbar%' ");
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="20">Tidak ada data!</td></tr>';
			
		}else{			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){

?>


<tr>
<td><?php echo $no; ?></td>
<td><?php echo $data['barcode'];?></td>
<td><?php echo $data['namabarang'];?></td>
<td><?php
if($data['qty'] >0 ){
echo $data['status'] = 'tersedia';}
else{
echo $data ['status'] = 'tidak tersedia';}?></td>
<td><?php echo $data['qty'];?></td>
<td><?php echo $data['tglmasuk'];?></td>
<td>

<a href="delete.php?id=<?php echo $data['id_barang']; ?>"><center>Hapus</a>||
<a href="editbarang.php?id=<?php echo $data['id_barang']; ?>">Edit</a>||
<a href="export.php?id=<?php echo $data['id_barang']; ?>">Export</center></a>
</td>

</tr>


<?php
$no++;
}

}
?>
</table></div>
</div>
<div class="container">
<div class="row">
<div class="grid_8"><br><br><br>

<div class="blog">
</div>
</div>
</div>
</div>
</section>

<!--==============================
footer
=================================-->
<footer id="footer">
<div class="container">
<div class="row">
<div class="grid_12">
<h2>Contact me</h2>
<div class="footer_phone">082123527068</div>
<a href="#" class="footer_mail">fatwayanfikri@gmail.com</a>
<div class="sub-copy">This designed by Fatwa's tmv</a></div>
</div>
</div>

</div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>

