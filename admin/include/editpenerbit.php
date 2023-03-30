<?php 
if(isset($_GET['data'])){
	$id_penulis = $_GET['data'];
	$_SESSION['id_penulis']=$id_penulis;
	
    //get data email nama dll
	$sql_d = "select `penulis`,  `alamat` from `penulis` where `id_penulis` = '$id_penulis'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $penulis= $data_d[0];
       $alamat= $data_d[1]; 
    }
}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit penulis</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=penulis">penulis</a></li>
              <li class="breadcrumb-item active">Edit penulis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit penulis</h3>
        <div class="card-tools">
          <a href="index.php?include=penulis" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>

      <?php if(!empty($_GET['notif'])){?>
   <?php if($_GET['notif']=="editkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data penulis wajib di isi</div>
   <?php }?>
<?php }?>

      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-penulis">
  <div class="card-body">
      <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data User</u></span></label>
      </div>

      <div class="form-group row">
          <label for="penulis" class="col-sm-3 col-form-label">penulis</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="penulis" id="penulis" value="<?php echo $penulis;?>">
           </div>
      </div>

      <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat;?>">
            </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
     <div class="col-sm-10">
        <button type="submit" class="btn btn-info float-right">
        <i class="fas fa-save"></i> Simpan</button>
     </div>  
  </div>
  <!-- /.card-footer -->
</form> 

    </div>
    <!-- /.card -->

    </section>
   