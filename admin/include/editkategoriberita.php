<?php 
if(isset($_GET['data'])){
	$id_kategori_berita = $_GET['data'];
	$_SESSION['id_kategori_berita']=$id_kategori_berita;
	
    //get data kategori berita
	$sql_d = "select `kategori_berita` from `kategori_berita` where `id_kategori_berita` = '$id_kategori_berita'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $kategori_berita= $data_d[0];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Kategori berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=kategori-berita">Kategori berita</a></li>
              <li class="breadcrumb-item active">Edit Kategori berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Kategori berita</h3>
        <div class="card-tools">
          <a href="index.php?include=kategori-berita" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="editkosong"){?>
          <div class="alert alert-danger" role="alert">
          Maaf data kategori berita wajib di isi</div>
      <?php }?>
      <?php }?>
      </div>
      <form class="form-horizontal" action = "index.php?include=konfirmasi-edit-kategori-berita" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="Kategori berita" class="col-sm-3 col-form-label">Kategori berita</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Kategori berita" name = "kategori_berita" value="<?php echo $kategori_berita;?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>