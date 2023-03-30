<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	//gat data berita
  $sql = "SELECT `b`.`cover`,`k`.`kategori_berita`,`b`.`judul`,
        `b`.`tanggal`,
        `p`.`penulis`, `b`.`isi` FROM `berita` `b`
        INNER JOIN `kategori_berita` `k` ON 
        `b`.`id_kategori_berita`=`k`.`id_kategori_berita`
        INNER JOIN `penulis` `p` ON `b`.`id_penulis`= `p`.`id_penulis`
        WHERE `b`.`id_berita`='$id_berita'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $kategori_berita = $data[1];
    $judul = $data[2];
    $tanggal = $data[3];
    $penulis = $data[4];
    $isi = $data[5];
  }
 
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=berita">Data berita</a></li>
              <li class="breadcrumb-item active">Detail Data berita</li>
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
                  <a href="index.php?include=berita" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
              <tbody>                      
                  <tr>
                    <td><strong>Cover berita<strong></td>
                    <td><img src="cover/<?php echo $cover;?>" 
                    class="img-fluid" width="200px;"></td>
                  </tr>               
                  <tr>
                      <td width="20%"><strong>Kategori berita<strong></td>
                      <td width="80%"><?php echo $kategori_berita;?></td>
                  </tr>                 
                  <tr>
                      <td width="20%"><strong>Judul<strong></td>
                      <td width="80%"><?php echo $judul;?></td>
                  </tr>                 
                  <tr>
                      <td width="20%"><strong>Pengarang<strong></td>
                      <td width="80%"><?php echo $penulis;?></td>
                  </tr>
                  <tr>
                      <td width="20%"><strong> Tanggalt<strong></td>
                      <td width="80%"><?php echo $tanggal;?></td>
                  </tr>
                  <tr>
                      <td><strong>Tag<strong></td>
                      <td>
                      <ul>
                      <?php
                    //get tag
                    $sql_h = "SELECT `t`.`tag` from `tag_berita` `tb`
                              inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` 
                              where `tb`.`id_berita`='$id_berita'";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    while($data_h = mysqli_fetch_row($query_h)){
                    $tag= $data_h[0];
                    ?>
                    <li><?php echo $tag;?></li>
                    <?php }?>
                    </ul>
                    </td>
                  </tr>
                  <tr>
                      <td width="20%"><strong>isi<strong></td>
                      <td width="80%"><?php echo $isi;?></td>
                  </tr> 
                </tbody>
              </table>
              
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>