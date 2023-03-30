<?php 
$id_penulis = $_SESSION [`id_penulis`];
$penulis = $_POST['penulis'];
$alamat = $_POST['alamat'];

if(empty($penulis)){
	header("Location:index.php?include=tambah-penulis&notif=tambahkosong");
}if (empty($alamat)){
        header("Location:tambahpenulis.php?notif=tambahkosong");
}else{
	$sql = "insert into `penulis` (`penulis`, `alamat`) 
	values ('$penulis', '$alamat')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=penulis&notif=tambahberhasil");	
}
?>
