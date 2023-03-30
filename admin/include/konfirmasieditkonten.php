<?php 
if(isset($_SESSION['id_konten'])){
  $id_konten = $_SESSION['id_konten'];
  $id_kategori_konten = $_POST['kategori_konten'];
  $judul = $_POST['judul'];
  $isi_konten=$_POST['isi_konten']

   if(empty($id_kategori_konten)){
 	    header("Location:index.php?include=edit-konten&data=".$id_konten."&notif=editkosong");
    }else if(empty($judul)){
        header("Location:index.php?include=edit-konten&data=".$id_konten."&notif=editkosong");
    }else if(empty($isi_konten)){
        header("Location:index.php?include=edit-konten&data=".$id_konten."&notif=editkosong");
    }else{
	$sql = "update `konten` set `id_kategori_konten`='$id_kategori_konten' ,`judul`='$judul',`isi_konten`='isi_konten'
	where `id_konten`='$id_konten'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_konten']);

	header("Location:index.php?include=konten&notif=editberhasil");
  }
}
?>