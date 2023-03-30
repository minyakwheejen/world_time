<?php
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	$_SESSION['id_berita']=$id_berita;
	//get data berita
	$sql_m = "SELECT `id_kategori_berita`,`judul`,`id_penulis`,
    `tanggal`,`isi` FROM `berita` WHERE `id_berita`='$id_berita'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$id_kategori_berita= $data_m[0];
		$judul = $data_m[1];
    $id_penerbit = $data_m[2];
    $tanggal = $data_m[3];
    $isi = $data_m[4];
	}
	//get tag
	$sql_h = "select `id_tag` from `tag_berita` 
        where `id_berita`='$id_berita'";
	$query_h = mysqli_query($koneksi,$sql_h);
	$array_tag = array();
	while($data_h = mysqli_fetch_row($query_h)){
		$id_tag= $data_h[0];
		$array_tag[] = $id_tag;
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
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Berita</h3>
        <div class="card-tools">
          <a href="index.php?include=berita" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
   <?php if($_GET['notif']=="editkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf Data Berita wajib di isi</div>
   <?php }?>
<?php }?>
<form class="form-horizontal" action="index.php?include=konfirmasi-edit-berita" method="post"
   enctype="multipart/form-data">
<div class="card-body">      
    <div class="form-group row">
       <label for="foto" class="col-sm-3 col-form-label">Cover Berita   
       </label>
       <div class="col-sm-7">
       <div class="custom-file">
       <input type="file" class="custom-file-input" name="cover" 
       id="customFile">
       <label class="custom-file-label" for="customFile">Choose 
       file</label>
       </div>  
       </div>
   </div>
   <div class="form-group row">
      <label for="kategori" class="col-sm-3 col-form-label">Kategori 
      Berita</label>
      <div class="col-sm-7">
      <select class="form-control" id="kategori" name="kategori_berita">
      <option value="">- Pilih Kategori -</option>
      <?php 
      $sql_k = "SELECT `id_kategori_berita`,`kategori_berita` FROM 
      `kategori_berita` ORDER BY `kategori_berita`";
      $query_k = mysqli_query($koneksi, $sql_k);
      while($data_k = mysqli_fetch_row($query_k)){
      $id_kat = $data_k[0];
      $kat = $data_k[1];
      ?>
      <option value="<?php echo $id_kat;?>" 
      <?php if($id_kat==$id_kategori_berita){?>
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
      <label for="penulis" class="col-sm-3 col-form-
      label">Penulis</label>
      <div class="col-sm-7">
      <select class="form-control" id="penulis" name="penulis">
      <option value="">- Pilih penulis -</option>
      <?php 
      $sql_t = "SELECT `id_penulis`,`penulis` FROM `penulis`
      ORDER BY `penulis`";
      $query_t = mysqli_query($koneksi, $sql_t);
      while($data_t = mysqli_fetch_row($query_t)){
      $id_penulis = $data_t[0];
      $penulis = $data_t[1];
      ?>
      <option value="<?php echo $id_penulis;?>"
      <?php if($id_penulis==$id_penulis){?>
      selected <?php }?>><?php echo $penulis;?></option>
      <?php }?>
      </select>
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
     <label for="isi" class="col-sm-3 col-form-label">Isi</label>
     <div class="col-sm-7">
     <textarea class="form-control" name="isi" id="editor1" 
     rows="12"><?php echo $isi;?></textarea>
     </div>
  </div>          
  <div class="form-group row">
     <label for="tag" class="col-sm-3 col-form-label">Tag</label>
     <div class="col-sm-7">
     <?php 
     $sql_g = "SELECT `id_tag`,`tag` FROM `tag`
     ORDER BY `tag`";
     $query_g = mysqli_query($koneksi, $sql_g);
     while($data_g = mysqli_fetch_row($query_g)){
     $id_tg = $data_g[0];
     $tg = $data_g[1];
     ?>
     <input type="checkbox"  name="tag[]" value="<?php echo $id_tg;?>"
     <?php if(in_array($id_tg, $array_tag)){?>checked="checked" <?php }?>> 
     <?php echo $tg;?> </br>
     <?php }?>
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