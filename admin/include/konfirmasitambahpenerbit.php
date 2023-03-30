<?php 
include('../koneksi/koneksi.php');
$penulis = $_POST['penulis'];
$alamat = $_POST['alamat'];

if(empty($penulis)){
	header("Location:index.php?include=tambah-penulis&notif=tambahpenuliskosong");
}else if(empty($alamat)){
	header("Location:index.php?include=tambah-penulis&notif=tambahalamatkosong");
}else{
	$sql = "insert into `penulis` (`penulis`, `alamat`) values ('$penulis', '$alamat')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=penulis&notif=tambahpenulisberhasil");	
}
?>
