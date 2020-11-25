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
 <li><font size="3"><a href="masukannis.php">Peminjam</a></li></font>
 
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

<section id="content"><div class="ic"></div><center><h2> Data Barang</h2></center>
<div id='table-a'>

<form name="input_data" action="searchbarang.php"  method="post">
<table align="center" border="0" cellpadding="30" cellspacing="0" ><br>

<tr><td><center><input type="text" placeholder="id_barang" maxlength= "10" name="id_barang" required></td>
<td><input type="submit" value="Cari"></td>
<td></tr>
</table>
</div>

<center><br><table style="margin-top:-250px" bgcolor = 'white' border='50%' cellpadding='500%' cellspacing='10%' width = '78%' >
	<thead>
		<tr bgcolor = '#88858a' align = 'center'>
	 <td height = 50px ><br>	  <font size = '3' color = "white"> No.</td></font>
			<td><br><font size = '3' color = "white">Id Barang</td></font>
			<td><br><font size = '3' color = "white">Nama Barang</td></font>
			<td><br> <font size = '3' color = "white">Status</td></font>
			<td><br> <font size = '3' color = "white"> Jumlah Barang</td></font>
		<td><br>	 <font size = '3' color = "white"> Tgl Masuk</td></font>
			<td colspan = "2"><br><font size = '3' color = "white">Opsi</td></font>
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
$query=mysql_query("select * from barang");
$no=1;
if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="20">Tidak ada data!</td></tr>';
			
		}else{			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){

?>
		<br>
	
		<tr>
			<td><center><?php echo $no; ?></td>
			<td><center><?php echo '<font size = 30>';echo bar128(stripslashes( $data['barcode']));?></td>
			<td><center><?php echo $data['namabarang'];?></td>
			<td><center><?php
if($data['qty'] >0 ){
echo $data['status'] = 'tersedia';}
else{
echo $data ['status'] = 'tidak tersedia';}?></td>
			<td><center><?php echo $data['qty'];?></td>
				<td><center><?php echo $data['tglmasuk'];?></td>
			
		
		<td>
				
				<center><a href="delete.php?id=<?php echo $data['id_barang']; ?>">Hapus</a></td><td>
				<center><a href="update.php?id=<?php echo $data['id_barang']; ?>">Delete</a>
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

