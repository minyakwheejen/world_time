<?php 
    $id_kategori_konten = $_POST['kategori_konten'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi_konten = $_POST['isi'];
    $id_user = $_POST['username'];
        
    if(empty($id_kategori_konten)){
	    header("Location:index.php?include=tambah-konten&notif=tambahkosong&jenis=kategorikonten");
	}else if(empty($judul)){
	    header("Location:index.php?include=tambah-konten&notif=tambahkosong&jenis=judul");
	}else if(empty($tanggal)){
	    header("Location:index.php?include=tambah-konten&notif=tambahkosong&jenis=tanggal");
	}else if(empty($isi_konten)){
	    header("Location:index.php?include=tambah-konten&notif=tambahkosong&jenis=isikonten");
    }else if(empty($id_user)){
        header("Location:index.php?include=tambah-konten&notif=tambahkososng&jenis=iduser");
    }else{   
	$sql = "INSERT INTO `konten` 
      (`id_kategori_konten`,`judul`,
	`tanggal`,`isi_konten`,`id_user`)
      VALUES ('$id_kategori_konten','$judul','$tanggal','$isi_konten','$id_user')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_konten = mysqli_insert_id($koneksi);
      header("Location:index.php?include=konten&notif=tambahberhasil");
    }
?>	