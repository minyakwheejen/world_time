<?php
if(isset($_GET['data'])){
	$id_konten= $_GET['data'];
  $_SESSION['id_konten']=$id_konten;
	//get data berita
	$sql_m = "SELECT `id_kategori_konten`,`judul`,`tanggal`,`isi_konten` FROM `konten` WHERE `id_konten`='$id_konten'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$id_kategori_konten= $data_m[0];
		$judul = $data_m[1];
    $tanggal = $data_m[2];
    $isi_konten = $data_m[3];
	}
}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=berita">Data Berita</a></li>
              <li class="breadcrumb-item active">Edit Data Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Konten</h3>
        <div class="card-tools">
          <a href="index.php?include=konten" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
   <?php if($_GET['notif']=="editkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf Data Konten wajib di isi</div>
   <?php }?>
<?php }?>
<form class="form-horizontal" action="index.php?include=konfirmasi-edit-konten" method="post"
   enctype="multipart/form-data">
<div class="card-body">      
   <div class="form-group row">
      <label for="kategori_konten" class="col-sm-3 col-form-label">Kategori 
      Konten</label>
      <div class="col-sm-7">
      <select class="form-control" id="kategori_konten" name="kategori_konten">
      <option value="">- Pilih Kategori -</option>
      <?php 
      $sql_k = "SELECT `id_kategori_konten`,`kategori_konten` FROM 
      `kategori_konten` ORDER BY `kategori_konten`";
      $query_k = mysqli_query($koneksi, $sql_k);
      while($data_k = mysqli_fetch_row($query_k)){
      $id_kat = $data_k[0];
      $kat = $data_k[1];
      ?>
      <option value="<?php echo $id_kat;?>" 
      <?php if($id_kat==$id_kategori_konten){?>
      selected <?php }?>><?php echo $kat;?></option>
      <?php }?>
      </select>
      </div>
  </div>
  <div class="form-group row">
      <label for="judul" class="col-sm-3 col-form-label">Judul</label>
      <div class="col-sm-7">
      <input type="text" class="form-control" name="judul" id="judul" 
      value="<?php echo $judul;?>">
      </div>
  </div>
  <div class="form-group row">
     <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
     <div class="col-sm-7">
     <input type="date" class="form-control" name="tanggal" 
     id="tanggal" value="<?php echo $tanggal;?>">
     </div>
  </div>
  <div class="form-group row">
     <label for="isi_konten" class="col-sm-3 col-form-label">Isi Konten</label>
     <div class="col-sm-7">
     <textarea class="form-control" name="isi_konten" id="editor1" 
     rows="12"><?php echo $isi_konten;?></textarea>
     </div>
  </div>          
  </div>
 </div>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
    <div class="col-sm-12">
    <button type="submit" class="btn btn-info float-right"><i class="fas 
    fa-save"></i> Simpan</button>
    </div>  
    </div>
    <!-- /.card-footer -->
</form>

    </div>
    <!-- /.card -->

    </section>