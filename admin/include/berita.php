<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	 if($_GET['aksi']=='hapus'){
      $id_berita = $_GET['data'];
      //get cover
      $sql_f = "SELECT `cover` FROM `berita` WHERE `id_berita`='$id_berita'";
      $query_f = mysqli_query($koneksi,$sql_f);
      $jumlah_f = mysqli_num_rows($query_f);
      if($jumlah_f>0){
        while($data_f = mysqli_fetch_row($query_f)){
          $cover = $data_f[0];
          //menghapus cover
          unlink("cover/$cover");
        }
      }
 
    //hapus tag berita
    $sql_dh = "delete from `tag_berita` where `id_berita` = '$id_berita'";
    mysqli_query($koneksi,$sql_dh);
    //hapus data berita
    $sql_dm = "delete from `berita` where `id_berita` = '$id_berita'";
    mysqli_query($koneksi,$sql_dm);
  }
}

if(isset($_POST['katakunci'])){
  $kata_kunci= $_POST['katakunci'];
  $_SESSION['katakunci'] = $kata_kunci;
}
if(isset($_SESSION['katakunci'])){
  $kata_kunci = $_SESSION['katakunci'];
}

?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-book"></i> Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Berita</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-berita" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Berita</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=berita">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Diubah</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Dihapus</div>
                    <?php }?>
                <?php }?>
              </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori Berita</th>
                        <th width="30%">Judul</th>
                        <th width="20%">Penulis</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $batas = 5;
                    if(!isset($_GET['halaman'])){
                         $posisi = 0;
                         $halaman = 1;
                    }else{
                         $halaman = $_GET['halaman'];
                         $posisi = ($halaman-1) * $batas;
                    } 

                    $sql_b = "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`";
                      if (isset($_POST["katakunci"])){
                        $katakunci_berita = $_POST["katakunci"];
                        $sql_b .= " WHERE `b`.`judul` LIKE '%$katakunci_berita%' OR `k`.`kategori_berita` LIKE '%$katakunci_berita%' OR `p`.`penulis` LIKE '%$katakunci_berita%'";
                        }
                        $sql_b .= " ORDER BY `b`.`Judul` limit $posisi,$batas";
                      $query_b = mysqli_query($koneksi,$sql_b);
                      $no = 1;
                      while($data_b = mysqli_fetch_row($query_b)){
                          $id_berita = $data_b[0];
                          $judul = $data_b[1];
                          $kategori_berita = $data_b[2];
                          $penulis = $data_b[3];
                      ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $kategori_berita; ?></td>
                          <td><?php echo $judul; ?></td>
                          <td><?php echo $penulis; ?></td>
                          <td align="center">
                          <a href="index.php?include=edit-berita&data=<?php echo $id_berita;?>" 
                          class="btn btn-xs btn-info" title="Edit"><i class="fas 
                          fa-edit"></i>Edit</a>
                          <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" 
                          class="btn btn-xs btn-info" title="Detail"><i class="fas 
                          fa-eye"></i>Detail</a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul; ?>?')) window.location.href ='index.php?include=berita&aksi=hapus&data=<?php echo $id_berita;?>¬if=hapusberhasil'"
                          class="btn btn-xs btn-warning"><i class="fas fa-trash" 
                          title="Hapus"></i>Hapus</a>                         
                          </td>
                          </tr>
                      <?php $no++;}?>   


                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <?php
              //hitung jumlah semua data 
              $sql_jum = "select `id_berita`, `judul` from    
                          `berita`";
              if(isset($kata_kunci) && !empty($kata_kunci)){
                  $sql_jum .= "WHERE `judul` LIKE '%$kata_kunci%' ";
              }
              $sql_jum .= "order by `judul`"; 
              $query_jum = mysqli_query($koneksi,$sql_jum);
              $jum_data = mysqli_num_rows($query_jum);
              $jum_halaman = ceil($jum_data/$batas);
              ?>

              <ul class="pagination pagination-sm m-0 float-right">
              <?php 
              if($jum_halaman==0){
                //tidak ada halaman
              }else if($jum_halaman==1){
                echo "<li class='page-item'><a class='page-link'>1</a></li>";
              }else{
                $sebelum = $halaman-1;
                $setelah = $halaman+1;
              if($halaman!=1){
                echo "<li class='page-item'>
                <a class='page-link' href='berita.php?halaman=1'>
                First</a></li>";
                echo "<li class='page-item'>
                <a class='page-link' href='berita.php?halaman=$sebelum'>
                «</a></li>";
              }
              for($i=1; $i<=$jum_halaman; $i++){
                  if($i!=$halaman){
                    echo "<li class='page-item'>
                    <a class='page-link' href='index.php?include=berita&halaman=$i'>
                    $i</a></li>";
                  }else{
                      echo "<li class='page-item'>
                      <a class='page-link'>$i</a></li>";
                  }
              }
              if($halaman!=$jum_halaman){
                  echo "<li class='page-item'>
                  <a class='page-link' href='index.php?include=berita&halaman=$setelah'>
                  »</a></li>";
                  echo "<li class='page-item'>
                  <a class='page-link' href='index.php?include=berita&halaman=$jum_halaman'>
                  Last</a></li>";
              }
              }?>
              </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>