<?php 
    $id_kategori_berita = $_POST['kategori_berita'];
    $judul = $_POST['judul'];
    $id_penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $tag = $_POST['tag'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;
        
    if(empty($id_kategori_berita)){
	    header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=kategoriberita");
	}else if(empty($judul)){
	    header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=judul");
	}else if(empty($id_penulis)){
	    header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=penulis");
	}else if(empty($tanggal)){
	    header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=tanggal");
	}else if(empty($tag)){
	    header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=tag");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:index.php?include=tambah-berita&notif=tambahkosong&jenis=cover");
    }else{   
	$sql = "INSERT INTO `berita` 
      (`id_kategori_berita`,`judul`,`id_penulis`,
	`tanggal`,`isi`,`cover`)
      VALUES ('$id_kategori_berita','$judul','$id_penulis',
	'$tanggal','$isi','$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_berita = mysqli_insert_id($koneksi);
 
	if(!empty($_POST['tag'])){
		foreach($_POST['tag'] as $id_tag){
		   echo $sql_i = "insert into `tag_berita` (`id_berita`, `id_tag`) 
		   values ('$id_berita', '$id_tag')";
		   mysqli_query($koneksi,$sql_i);
		}
	}
      header("Location:index.php?include=berita&notif=tambahberhasil");
    }
?>	