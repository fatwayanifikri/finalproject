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

<center><h2>Pengembalian Barang</h2></center><br>

<div class="login">
<div class= "box3">
<form name="input_data" action="deletepeminjam.php"  method="post">
<font size = '3'><center><table>

	
		<?php

include('bar128.php');

?>
	<?php
	$idbar= $_POST['nis'];
		$query = mysql_query("SELECT * from peminjam where barcode like '%$idbar%' ");
		
		$no=1;
		while ($data = mysql_fetch_array($query)) 
		{
	?>

		<br>
		<tr><p><h1><center><font color= "#ededed">Data Peminjam</p></font></h1>
			<center><input type="text" value="<?php echo $data['barcode']; ?>" name="barcode"></center>
			<center><input type="text" value="<?php echo $data['nama']; ?>" name="nama" ></center>
			<center><input type="text" value="<?php echo $data['kelas']; ?>" name="kelas" ></center>
			<center><input type="date" value="<?php echo $data['tgl_pinjam']; ?>" name="tgl_pinjam" ></center>
		    <center><input type="time" value="<?php echo $data['jam']; ?>" name="jam" ></center>
<div class="login">
<div class= "box4"><br><br><font color= "#ededed">Data Barang Pinjam</p></font></h1>
		   	   
				 <center><input type="text" value="<?php echo $data['barangpinjam']; ?>" name="barangpinjam" ></center>
            <center><input type="text"  value="<?php echo $data['jumlah']; ?>" name="jumlah"></center><br>
			
		  <center><div id= "formkotak2"><a href="deletepeminjam.php?id=<?php echo $data['nis']; ?>">Kembalikan</a></div></center></div>
		</tr>	
			<tr><td><br></td></tr>
			
		

	<?php
	$no++;
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

