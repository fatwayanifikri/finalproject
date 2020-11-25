<!DOCTYPE html>
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
<link rel="stylesheet" href="css/style.css">
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
<li><font size="3"><a href="#">Stock Barang</a></font>
		<ul>
	 		<li><font size="3"><a href="databarang.php">Data Barang</a></li></font>
	 		<li><font size="3"><a href="barangmasuk.php">Masukan Data Barang</align></a></li></font>
			
		</ul>
	</li>
<li><font size="3"><a href="#">Peminjaman</a></font>
		<ul>
	 		<li><font size="3"><a href="datapeminjam.php">Data Peminjam</a></li></font>
	 		<li><font size="3"><a href="masukannis.php">Meminjam Barang</align></a></li></font>
			<li><font size="3"><a href="pengembalian.php">Mengembalikan Barang</align></a></li></font>
		</ul>
	</li>
<li><font size="3"><a href="#">Ekspor</a></font>
		<ul>
	 		<li><font size="3"><a href="export.php">Ekspor Data Barang</a></li></font>
	 		<li><font size="3"><a href="export2.php">Ekspor Data Peminjam</align></a></li></font>
		
		</ul>
	</li>
<li><font size="3"><a href="#">About Me</a></li></font>
<li><font size="3"><a href="logout.php">LogOut</a></li></font>
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
<section id="content"><div class="ic"></div>
<div>

<div class="container">
<div class="row">
<div class="grid_8">
<?php
echo "<div id = ''><h2>Welcome <strong>".$_SESSION['username']."</h2></div></strong>";
?>
<div class="blog">
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=10)){
echo "<strong>, Selamat Pagi !! </strong>";
}
else if(($a>10) && ($a<=15))
{
echo "<strong>, Selamat Siang !! </strong>";
}
else if (($a>15) && ($a<=18)){
echo "<strong>, Selamat Sore !! </strong>";
}
else { echo "<strong>,  Selamat Malam </strong>";}
?>
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
<a href="#" class="footer_mail">fatwayanifikritmv@gmail.com</a>
<div class="sub-copy">This designed by Fatwa's tmv</a></div>
</div>
</div>

</div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>

