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

<section id="content"><div class="ic"></div>
<div>

<div class="container">
<div class="row">
<div class="grid_8"><br><br><br>
<?php
if(!empty($_GET['message']) && $_GET['message'] =='success'){
echo'<h4>Berhasil menambah data!</h4>';
}

?>
<div class="login">
<div class="box">
<form name="input_data" action="insert.php"  method="post">
<table align="center" border="0" cellpadding="30" cellspacing="0" >
<p><h1><center><font color= "#ededed">DATA BARANG MASUK</p></font></h1>
<center>
<input type="text" placeholder="namabarang" name="namabarang"><br>
<input type="text" placeholder="Id" name="barcode"><br>
<input type="text" placeholder="Jumlah" name="qty"><br>
<input type="text"  name="tglmasuk" value="<?php $date = date("Y-m-d"); echo $date; ?> " readonly /><br><br>
<input type="submit" value="Simpan">
</center>
</table>
</div>
</font>

</div>
</div>
</div>
<div class="blog">
</div>
</div>
</div>
</div>
</section>
</form>
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

