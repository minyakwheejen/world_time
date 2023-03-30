
<?php 
        if(isset($_GET['data'])){
	      $id_penerbit = $_GET['data'];
        //get profil
        $sql = "SELECT `id_penerbit`, `penerbit`, `alamat` FROM `penerbit` WHERE `id_penerbit`='$id_penerbit'";
        //echo $sql;
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
            $id_penerbit = $data[0];
          $penerbit = $data[1];
          $alamat = $data[2];
        
        }}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Penerbit</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=penerbit">Data Penerbit</a></li>
              <li class="breadcrumb-item active">Detail Data Penerbit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=penerbit" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data Penerbit<strong></td>
                      </tr>                      
                      <tr>
                        <td width="20%"><strong>Penerbit<strong></td>
                        <td width="80%"><?php echo $penerbit;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Alamat<strong></td>
                        <td width="80%"><?php echo $alamat;?></td>
                      </tr>
                     
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
   
