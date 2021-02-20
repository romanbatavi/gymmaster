<?php 
include('config/koneksi.php');
// code user email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : Email anda tidak valid.";
	}
	else {
$sql ="SELECT username FROM tbl_member WHERE username='$email' ";
$query = mysqli_query($conn,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
echo "<span style='color:red'> Email Sudah Ada. Gunakan yang lain .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email Tersedia untuk Registrasi .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}


?>
