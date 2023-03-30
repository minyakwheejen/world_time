<?php
$kategori_berita = $_POST['kategori_berita'];
if(empty($kategori_berita)){
	header("Location:index.php?include=tambah-kategori-berita&notif=tambahkosong");
}else{
	$sql = "insert into `kategori_berita` (`kategori_berita`) 
	values ('$kategori_berita')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=kategori-berita&notif=tambahberhasil");
}
?>
