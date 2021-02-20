<?php 
session_start();
include('config/koneksi.php');
error_reporting(0);

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
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/nk.jpeg">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1 style='text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;'>Aplikasi Memberhsip Gym </h1>
            <p><span style='text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;'><b>Penuhi Kebutuhan Gaya Hidup Sehat dengan didukung Aplikasi Membership Gym</b></span> </p>
            <a href="page.php?type=aboutus" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
  <div id="layanan"></div>
    <div class="section-header text-center">
      <h2>Pilih Paket Terbaik <span>Untuk Anda</span></h2>
      <p>Anda dapat memilih paket membership gym yang cocok untuk Anda. Sesuaikan paket dengan kebutuhan Anda atau anda dapat Konsultasi dengan trainer untuk sasaran dan pemilihan paket yang tepat.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">List Layanan Paket Terbaru</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "select * from tbl_tarif order by id_tarif ASC";
$query = mysqli_query($conn,$sql);

$cnt=1;
if(mysqli_num_rows($query) > 0)
{
while($tampil=mysqli_fetch_array($query))
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#<?php echo htmlentities($result->id);?>"><img src="assets/images/layanan.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-list" aria-hidden="true"></i><?php echo htmlentities($tampil['tipe']);?></li>
<?php if($tampil['tipe']=="UNLIMITED"){  ?>
<li><i class="fa fa-gear" aria-hidden="true"></i>Lat Max : &#8734;</li>
<?php }else{ ?>
<li><i class="fa fa-gear" aria-hidden="true"></i>Lat Max : <?php echo htmlentities($tampil['jml_latih_max']);?></li>
<?php } ?>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($tampil['jml_bulan']);?> Bulan</li>
</ul>
</div>
<div class="car-title-m">
<h6><?php echo $tampil['jenis_tarif'];?><?php echo htmlentities($result->VehiclesTitle);?></h6>
<span class="price">Rp<?php echo htmlentities(number_format($tampil['tarif'],0,',','.'));?></span> 
</div>
<div class="inventory_info_m">
<?php if($tampil['tipe']=="UNLIMITED"){  ?>
<p><?php echo substr("Keanggotaan Dengan Jumlah Latihan Maksimal UNLIMITED Selama $tampil[jml_bulan] Bulan",0,70);?></p>
<?php }else{ ?>
<p><?php echo substr("Keanggotaan Dengan Jumlah Latihan Maksimal $tampil[jml_latih_max] Selama $tampil[jml_bulan] Bulan",0,70);?></p>	
<?php } ?>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 




<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Tesimoni <span>Pelanggan</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tbl_member.nama from tbltestimonial join tbl_member on tbltestimonial.UserEmail= tbl_member.username where tbltestimonial.status='$tid'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0)
{
while($result=mysqli_fetch_array($query))
{  ?>
        <div class="testimonial-m">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result['nama']);?></h5>
            <p><?php echo htmlentities($result['Testimonial']);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

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

</body>
</html>