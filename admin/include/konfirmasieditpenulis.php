<?php 
if(isset($_SESSION['id_penulis'])){
  $id_penulis = $_SESSION['id_penulis'];
  $penulis = $_POST['penulis'];
  $alamat = $_POST['alamat'];
 
   if(empty($penulis)){
 	    header("Location:index.php?include=edit-penulis&data=".$id_penulis."&notif=editkosong");
  }else{
	$sql = "update `penulis` set `penulis`='$penulis' ,`alamat`='$alamat'
	where `id_penulis`='$id_penulis'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_penulis']);
	header("Location:index.php?include=penulis&notif=editberhasil");
  }
}
?>