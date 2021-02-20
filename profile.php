<?php
session_start();
error_reporting(0);
include('config/koneksi.php');

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['updateprofile']))
  {
error_reporting(0);
$maxUp=3000000;
$extensionList = array("bmp", "jpg", "gif");
$error = $_FILES['berkas']['error'];//error
$nama_file = $_FILES['berkas']['name'];//Name
/* New File Name */
$newname = substr( $nama_file , -3 );
$newname2 = substr( $nama_file , +3 );
$pecah = explode(".", $nama_file);
$ekstensi = $pecah[1];
$ukuran = $_FILES['berkas']['size'];//Size Byte
$temp = $_FILES['berkas']['tmp_name'];//Temporary
$tipe_data= $_FILES['berkas']['type'];//Type data
$extension=end(explode(".", $nama_file));
$tanggal_lahir = $_POST['tanggal_lahir'];
$pass = md5($_POST['password']);
if ($ukuran>$maxUp) {
echo "<script>
	alert('Ukuran File Foto Terlalu Besar, Maximal 3 mb!');
	</script>";
}else{
$sql = mysqli_query($conn,"UPDATE tbl_member SET
nama = '$_POST[nama]',
tanggal_lahir = '$tanggal_lahir',
alamat = '$_POST[alamat]',
jenis_kelamin = '$_POST[jenis_kelamin]',
pekerjaan='$_POST[pekerjaan]',
tel = '$_POST[tel]'
where id_member='$_POST[id_member]'");
if($sql){
$tes = $_POST['id_member'];
$newfilename="$tes"."."."jpg";
$tujuan = "admin/images/member/".$newfilename;//destination
	move_uploaded_file($temp,$tujuan);
echo '<script>alert(\'Data Berhasil Diedit\');</script>';
	}else{
	echo '<script>alert(\'Gagal Mengedit !\');</script>';
	}
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
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true"/>
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/nk.jpeg">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Profil Saya</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profil Saya</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tbl_member where username='$useremail'";
$cnt=1;
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0)
{
while($result=mysqli_fetch_array($query))
{  ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> 
	   <?php if (file_exists("admin/images/member/$result[id_member].jpg")) {
	  echo '<img width="100px" src="admin/images/member/'.$result['id_member'].'.jpg"/>';
	  }else
	  {
	  echo '<img width="100px" src="admin/images/member/def.png"/>';
	  } ?>
	  
	  
	  
      </div>

      <div class="dealer_info">
        <h5><?php echo htmlentities($result['nama']);?></h5>
        <p>No Member : <b><?php echo htmlentities($result['id_member']);?></b><br>
        <p><?php echo htmlentities($result['alamat']);?><br>
          </p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php');?>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Pengaturan General</h5>
          <?php  
         if($msg){?><div class="succWrap"><strong>SUKSES</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <form  method="post" enctype="multipart/form-data">
           <div class="form-group">
              <label class="control-label">Tanggal Daftar -</label>
             <?php echo htmlentities(DateToIndo($result['tanggal_daftar']));?>
            </div>
            
            <div class="form-group">
              <label class="control-label">Nama Lengkap</label>
              <input class="form-control white_bg" name="nama" value="<?php echo htmlentities($result['nama']);?>" id="nama" type="text"  required>
              <input class="form-control white_bg" name="id_member" value="<?php echo htmlentities($result['id_member']);?>" id="id_member" type="hidden"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result['username']);?>" name="username" id="username" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Nomor HP</label>
              <input class="form-control white_bg" name="tel" value="<?php echo htmlentities($result['tel']);?>" id="tel" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">Tanggal Lahir</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result['tanggal_lahir']);?>" name="tanggal_lahir" id="tanggal_lahir" type="date" >
			  
            </div>
            <div class="form-group">
              <label class="control-label">Alamat</label>
              <textarea class="form-control white_bg" name="alamat" rows="4" ><?php echo htmlentities($result['alamat']);?></textarea>
            </div>
			 <div class="form-group">
              <label class="control-label">Jenis Kelamin</label>
              <select class="form-control white_bg" id="jenis_kelamin" name="jenis_kelamin">
			  <?php if($result['jenis_kelamin']!="") { ?>
				<option value="<?php echo "$result[jenis_kelamin]"; ?>"><?php echo "$result[jenis_kelamin]"; ?></option>
			  <?php } ?>
				<option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
			 <div class="form-group">
              <label class="control-label">Pekerjaan</label>
              <input class="form-control white_bg" maxlength="40" id="pekerjaan" name="pekerjaan" value="<?php echo htmlentities($result['pekerjaan']);?>" id="nama" type="text" required>
            </div>
			<div class="form-group">
              <label class="control-label">Foto</label>
                    <input class="form-control white_bg" type="file" name="berkas"/>
            </div>
            <?php }} ?>
           
            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">Simpan Perubahan <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

<<!--Footer -->
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
<?php } ?>