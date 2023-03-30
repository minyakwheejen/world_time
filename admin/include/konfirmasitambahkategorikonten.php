<?php 
$kategori_konten = $_POST['kategori_konten'];
if(empty($kategori_konten)){
	header("Location:index.php?include=tambah-kategori-konten&notif=tambahkosong");
}else{
	$sql = "insert into `kategori_konten` (`kategori_konten`) 
	values ('$kategori_konten')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=kategori-konten&notif=tambahberhasil");	
}
?>
