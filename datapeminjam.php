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
<li><font size="3"><a href="masukannis.php">Peminjaman Barang</a></li></font>
<li><font size="3"><a href="pengembalian.php">Pengembalian Barang</a></li></font>
<li><font size="3"><a href="datapeminjam.php">Data Peminjam</a></li></font>
<li><font size="3"><a href="databarang.php">Lihat Stock</a></li></font>
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
<center><h2> Data Peminjam </h2></center>

<div id='table-b'>
<form name="input_data" action="searchpeminjam.php"  method="post">
<table align="center" border="0" cellpadding="30" cellspacing="0" >
<tr><td><center><input type="text" placeholder="nis" maxlength= "10" name="nis" required></td>
<td><input type="submit" value="Cari"></td></tr>
</table></div>
<br>
<center><table bgcolor = 'white' border='50%' cellpadding='500%' cellspacing='10%' width = '78%' >
	<thead>
		<tr bgcolor = 'orange' align = 'center'  >
		    <td height = 50px ><br><font size = '3' color = "white">No.</td></font>
			<td><br><font size = '3' color = "white">Nis</font></td>
			<td><br><font size = '3' color = "white">Nama</font></td>
		    <td><br><font size = '3' color = "white">Kelas</font></td>
			 <td><br><font size = '3' color = "white">Barang Yang Dipinjam</font></td>
			  <td><br><font size = '3' color = "white">Jumlah</font></td>
			  <td><br><font size = '3' color = "white">Jam Meminjam</font></td>
			<td colspan = '2'><br><font size = '3' color = "white">Opsi</font></td>
		</tr>
	<tr>
	<td><br></td>
	</tr>
	</head>
	<tbody>	
		<?php

include('bar128.php');
?>
<?php
$query=mysql_query("select * from peminjam");
$no=1;
if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="15"><center><strong>Tidak ada data!</center></strong></td></tr>';
			
		}else{			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){

?>
		<br>
	
		<tr>
			<td><center><?php echo $no; ?></td>
			<td><center><?php echo bar128(stripslashes( $data['barcode']));?></td>
			<td><center><?php echo $data['nama'];?></td>
			<td><center><?php echo $data['kelas'];?></td>
			<td><center><?php echo $data['barangpinjam'];?></td>
				<td><center><?php echo $data['jumlah'];?></td>
			<td><center><?php echo $data['jam'];?></td>
		
		<td>
				
				<center><a href="deletepeminjam.php?id=<?php echo $data['nis']; ?>">Hapus</a>
			
			</td>
			<td>
				
				<center><a href="editpeminjam.php?id=<?php echo $data['nis']; ?>">Edit</a>
			
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
        <a href="#" class="footer_mail">fatwayanifikri@gmail.com</a>
        <div class="sub-copy">This designed by Fatwa's tmv</a></div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>

