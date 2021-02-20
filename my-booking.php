<?php
session_start();
error_reporting(0);
include('config/koneksi.php');

if(isset($_POST['paket']))
  {
$kode_tarif=$_POST['kode_tarif'];
$id_member=$_POST['id_member'];
//autonumber
$qr1	= mysqli_query($conn,"SELECT MAX(CONCAT(LPAD((RIGHT((id_transaksi),7)+1),7,'0')))FROM tbl_trans_deposit");
$qr2	= mysqli_query($conn,"SELECT MIN(CONCAT(LPAD((RIGHT((id_transaksi),7)),7,'0')))FROM tbl_trans_deposit");	
$kde1= mysqli_fetch_array($qr1);
$kde2= mysqli_fetch_array($qr2);
if ($kde2[0]!="0000001"){
$kodea = "0000001";
}
else{
$kodea = $kde1[0];
} 
//autonumber
date_default_timezone_set('Asia/Jakarta');
$skrg = mktime(date("m"),date("d"),date("Y"));
$now = date("Y-m-d", $skrg);
$dtarif = mysqli_fetch_array(mysqli_query($conn,"select * from tbl_tarif where kode_tarif='$kode_tarif'"));
$sql=mysqli_query($conn,"INSERT INTO tbl_trans_deposit (id_transaksi,
id_member,
kode_tarif,
jumlah_deposit,
tanggal_transaksi,
status_persetujuan,
status_konfirmasitagihan,
status_setujukonfirmasi,
ket) VALUES ('TRN$kodea','$id_member','$kode_tarif','$dtarif[tarif]','$now','Y','Y','N','-')");
if($sql)
{
$msg="Pemesanan Paket Telah Dilakukan. Silahkan Lakukan Konfirmasi Pembayaran. Lihat No Transaksi Anda Pada <br><b>RIWAYAT TRANSAKSI AKTIVASI</b>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>";
}
else 
{
$error="<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
Error, Silahkan Coba Lagi".mysqli_error();
}
  }
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
	
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
} 
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title><?php include('includes/title.php'); ?></title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"/>
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/nk.jpeg">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!--Page Header-->
<!-- /Header --> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Paket Saya</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Paket Saya</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tbl_member where username ='$useremail'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0)
{
while($result = mysqli_fetch_array ($query))
{ ?>

          <?php }}?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3">
       <?php include('includes/sidebar.php');?>
   
      <div class="col-md-8 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Paket Saya </h5>
		  <?php error_reporting(0); if($msg){?><div style='font-size:11pt; background-color:#d0ceff; padding:20px; border:1px solid black; text-align:center'><div class="succWrap"><strong>SUKSES</strong>:<?php echo $msg; ?></div></div><?php }?>
		  <?php if($error){?><div class="succWrap"><strong>GAGAL</strong>:<?php echo $error; ?> </div><?php }?>
		  <?php
		  $useremail=$_SESSION['login'];
		  $datamember  = mysqli_fetch_array(mysqli_query($conn,"select * from tbl_member where username = '$useremail'"));
		  echo '
		<table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Kode Tarif (Paket)</th>
						<th>Deposit Terakhir</th>
						<th>Berlaku s/d</th>
						<th>Sisa Kuota Latih</th>
						<th>Tambah/Aktivasi</td>
						
                    </tr>
                </thead>
                <tbody>';
                                 			  
					          $sql = mysqli_query($conn,"SELECT * FROM tbl_tarif ORDER BY kode_tarif");
							  
					          $no = 1;
                    while ($r = mysqli_fetch_array($sql)) {
                      echo "<tr>
                            <td width=20>$no</td>
                           
                       <td>$r[kode_tarif] ($r[jenis_tarif]) - $r[jml_latih_max] Kuota Latihan</td>
					   
							";
							error_reporting(0);
							$tampil_member =  mysqli_fetch_array(mysqli_query($conn,"select * from tbl_member,tbl_deposit where tbl_deposit.id_member = tbl_member.id_member and tbl_deposit.id_member = '$datamember[id_member]' and tbl_deposit.kode_tarif = '$r[kode_tarif]'"));
date_default_timezone_set('Asia/Jakarta');
$tanggal1= mktime(date("m"),date("d"),date("Y"));
$tglsekarang1 = date("Y-m-d", $tanggal1);
$pecah2 = explode("-", $tglsekarang1);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 = $pecah2[0];
$sekarang2 = GregorianToJD($month2, $date2, $year2);
$valid2 = $tampil_member['tanggal_berlaku'];
$pecah3 = explode("-", $valid2);
$date3= $pecah3[2];
$month3 = $pecah3[1];
$year3 = $pecah3[0];
$valid3 = GregorianToJD($month3, $date3, $year3);
$selisih2 = $valid3 - $sekarang2;
if($selisih2 < 0 || ($r['tipe']=="REGULAR" && $tampil_member['kuota_latihan']==0))
{echo "<td><div style='color:red; font-weight:bold'>NONAKTIF</div></td>";
}else{
$pecah2 = explode("-", $tampil_member['tanggal_deposit']);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 = $pecah2[0];

							echo "
							<td>".DateToIndo($tampil_member['tanggal_deposit'])."</td>
							";
							}
							date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
$pecah1 = explode("-", $tglsekarang);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];
$sekarang = GregorianToJD($month1, $date1, $year1);
$valid = $tampil_member['tanggal_berlaku'];
$pecah2 = explode("-", $valid);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 = $pecah2[0];
$valid2 = GregorianToJD($month2, $date2, $year2);
$selisih = $valid2 - $sekarang;
if($selisih < 0 || ($r['tipe']=="REGULAR" && $tampil_member['kuota_latihan']==0))
{echo "<td><div style='color:red; font-weight:bold'>NONAKTIF</div></td>";
}else{
							echo "<td>".DateToIndo($tampil_member['tanggal_berlaku'])."</td>";

							}
							if($selisih < 0 || ($r['tipe']=="REGULAR" && $tampil_member['kuota_latihan']==0))
							{echo "<td><div style='color:red; font-weight:bold'>NONAKTIF</div></td>";
							}else{
							if($r['tipe']=="REGULAR"){
							echo "<td>$tampil_member[kuota_latihan]</td>";
							}else{
								echo "<td>UNLIMITED</td>";
							}
							}
							
							echo "<td><span style='color:blue; font-weight:bold;'><a class='btn btn-xs btn-default' href='#loginform$r[id_tarif]' data-toggle='modal' data-dismiss='modal'>Tambah/Aktivasi</a></span>";
							?>
							<div class="modal fade" id="loginform<?php echo $r['id_tarif']; ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">AKTIVASI / PERPANJANG Paket Member</h3>
      </div>
      <div class="modal-body">
	  TATA CARA PEMESANAN AKTIVASI / PERPANJANG :<br>
	  1. Setelah Klik tombol <b>AKTIVASI/PERPANJANG</b> Maka Invoice akan muncul pada <b>RIWAYAT TRANSAKSI AKTIVASI</b><br>
	  2. Lakukan Pembayaran Melalui No Rek. Bank Yang Tersedia<br>
	  3. Setelah Itu anda dapat mengkonfirmasi pembayaran melalui Kontak Kami atau Call Center<br>
	  4. Dalam 1 x 24 jam paket anda akan diaktivasi / diperpanjang.<br>
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post" name="paket">
                <div class="form-group">
                  <input type="text" class="form-control" name="tampil_id_member" value='<?php echo $datamember['id_member']." - ".$datamember['nama']; ?>' placeholder="">
				  <input type="hidden" class="form-control" name="id_member" value='<?php echo $datamember['id_member']; ?>' placeholder="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="tampil_paket" value="<?php echo $r['tipe']." - ".$r['kode_tarif']." (".$r['jenis_tarif'].") - ".$r['jml_bulan']." Bulan - Rp".number_format($r['tarif'],0,',','.'); ?>">
				  <input type="hidden" class="form-control" name="kode_tarif" value="<?php echo $r['kode_tarif']; ?>">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
               
                </div>
                <div class="form-group">
                  <input type="submit" onclick="return confirm('Anda Yakin Untuk Memesan Paket Ini?')" name="paket" value="AKTIVASI/PERPANJANG" class="btn btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
							<?php echo "</td>";
							echo "	
                         </tr>";
							
                      $no++;
                    }                    
                    echo "
                </tbody>
         </table></br>";
		 
		 ?>
		   <h5 class="uppercase underline">Riwayat Transaksi Aktivasi </h5>
		  <?php
		  echo '
		<table id="datatables2" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>INVOICE</th>
                        <th>ID MEMBER</th>
						<th>Nama Member</th>
						<th>KD PAKET</th>
						<th>PAKET</th>
						<th>Total Harga</th>
						
						<th>Status</th>
						<th>Cetak Invoice</th>
						
                    </tr>
                </thead>
                <tbody>';
                                      
									   $sql = mysqli_query($conn,"SELECT * FROM tbl_trans_deposit 
left join tbl_member on tbl_trans_deposit.id_member = tbl_member.id_member
left join tbl_tarif on tbl_trans_deposit.kode_tarif = tbl_tarif.kode_tarif 
where (tbl_trans_deposit.id_member = '$datamember[id_member]')
									   ORDER BY id_transaksi DESC");
									  
					          $no = 1;
                    while ($r = mysqli_fetch_array($sql)) {
                      echo "<tr>
					<td width=40>$no</td>
                            <td>$r[id_transaksi]</td>
                            <td>$r[id_member]</td>
							<td>$r[nama]</td>
							<td>$r[kode_tarif]</td>
							<td>$r[tipe]-$r[jenis_tarif]</td>
                            <td>Rp".number_format($r['jumlah_deposit'],2,',','.')."</td>";
							if($r['status_setujukonfirmasi']=="Y"){$stt = '<span style="background-color:#53bd51; font-weight:bold; color:white">DIKONFIRMASI</span>';}else{$stt = '<span style="background-color:#e2a208; font-weight:bold; color:white">MENUNGGU KONFIRMASI</span>';}
							echo"
                            <td>$stt</td>
						    ";
							if($r['status_setujukonfirmasi']=="Y"){
						  echo'<td><a href="admin/modul/transaksi/cetakinvoice.php?id_transaksi='.$r['id_transaksi'].'" target="_blank">Print Bukti</a></td>
';
							}else{
							echo'<td><a href="admin/modul/transaksi/invbelumkonfirmasi.php?id_transaksi='.$r['id_transaksi'].'" target="_blank"> Tagihan</a></td>
';	
							}
							echo "
                            </tr>";
							
                      $no++;
                    }                    
                    echo "
                </tbody>
         </table>";
		  ?>
        
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
<?php include('includes/footer.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<style type="text/css">
            @import "admin/plugin/media/css/demo_table_jui.css";
            @import "admin/plugin/media/themes/sunny/jquery-ui-1.8.4.custom.css";
    </style>      
        <script src="admin/plugin/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $('#datatables').dataTable({
					     "oLanguage": {
						      "sLengthMenu": "Tampilkan _MENU_ data per halaman",
						      "sSearch": "Pencarian: ", 
						      "sZeroRecords": "Data Kosong",
						      "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
						      "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
						      "sInfoFiltered": "(di filter dari _MAX_ total data)",
						      "oPaginate": {
						          "sFirst": "<<",
						          "sLast": ">>", 
						          "sPrevious": "<", 
						          "sNext": ">"
					       }
				      },
              "sPaginationType":"full_numbers",
              "bJQueryUI":true
            });
          })   

		$(document).ready(function(){
            $('#datatables2').dataTable({
					     "oLanguage": {
						      "sLengthMenu": "Tampilkan _MENU_ data per halaman",
						      "sSearch": "Pencarian: ", 
						      "sZeroRecords": "Data Kosong",
						      "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
						      "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
						      "sInfoFiltered": "(di filter dari _MAX_ total data)",
						      "oPaginate": {
						          "sFirst": "<<",
						          "sLast": ">>", 
						          "sPrevious": "<", 
						          "sNext": ">"
					       }
				      },
              "sPaginationType":"full_numbers",
              "bJQueryUI":true
            });
          })    		  
        </script>
</body>
</html>
<?php } ?>