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
 <li><font size="3"><a href="peminjammasuk.php">Peminjaman Barang</a></li></font>
 <li><font size="3"><a href="pengembalian.php">Pengembalian Barang</a></li></font>
 <li><font size="3"><a href="datapeminjam.php">Data Peminjam</a></li></font>

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
<br>

<center><h2> Masukan Data Peminjam</h2></center><br>

<div class="login">
<div class= "box3">
<form name="input_data" action="insertpeminjam.php"  method="post">
<font size = '3'><center><table>

	
		<?php

include('bar128.php');

?>
	<?php
	error_reporting(0);
	$idbar= $_POST['nis'];
		$query = mysql_query("SELECT * from siswa where barcode like '%$idbar%' ");
		
	
		$no=1;
		while ($data = mysql_fetch_array($query)) 
		{
	?>

		<br>
		<tr><p><h1><center><font color= "#ededed">Data Peminjam</p></font></h1>
			<center><input type="text" value="<?php echo $data['barcode']; ?>" name="barcode"></center>
			<center><input type="text" value="<?php echo $data['nama']; ?>" name="nama" ></center>
			<center><input type="text" value="<?php echo $data['kelas']; ?>" name="kelas" ></center>
			<center><input type="text"  name="tgl_pinjam" value="<?php $date = date("Y-m-d"); echo $date; ?> " readonly /></center>
		    <center><input type="text"  name="jam" value="<?php date_default_timezone_set('Asia/Jakarta'); $date = date("H:i:s"); echo $date; ?> " readonly /></center>
<div class="login">

	<?php
	error_reporting(0);
	$idbar= $_POST['id_barang'];
		$query = mysql_query("SELECT * from barang where barcode like '%$idbar%' ");
		
	
		$no=1;
		while ($data = mysql_fetch_array($query)) 
		{
	?>
<div class= "box4"><br><br><font color= "#ededed">Masukan Data Barang</p></font></h1>
		<center><input type="text" value="<?php   echo $data['namabarang']; ?>" name="barangpinjam" ></center>
		<center><input type="text" value="<?php  echo 'Jumlah saat ini : '; echo $data['qty']; ?>" name="qty" disabled></center>
            <center><input type="text" placeholder="jumlah pinjam" name="jumlah" minlength = "1" required></center><br>
			
		    <center><a href="#popup"><input type="submit" value="Simpan"></center></div></a>
		</tr>	
			<tr><td><br></td></tr>
			
		

	<?php
	$no++;
		}	
		
		}
	?>
	</table></div>
	</div></form>
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
        <a href="#" class="footer_mail">fatwayanifikri@gmail.com</a>
        <div class="sub-copy">This designed by Fatwa's tmv</a></div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>

