<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	//gat data berita
  $sql = "SELECT `b`.`cover`,`k`.`kategori_berita`,`b`.`judul`,`p`.`penulis`, `b`.`isi` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita`=`k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis`= `p`.`id_penulis` WHERE `b`.`id_berita`='$id_berita'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $id_berita = $data[0];
    $judul = $data[1];
    $kategori_berita = $data[2];
    $penulis = $data[3];
    $cover = $data[4];
  }
}
?>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        Internasional
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      
                      <?php
                        $sql_b= "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis`, `b`. `cover` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`
                        WHERE 	`b`.`id_kategori_berita`=2 ORDER BY `b`.`id_berita` DESC";
                        $query_b = mysqli_query($koneksi, $sql_b);
                        while($data_b = mysqli_fetch_row($query_b)){
                          $id_berita = $data_b[0];
                          $judul = $data_b[1];
                          $kategori_berita= $data_b[2];
                          $penulis=$data_b[3];
                          $cover=$data_b[4];

                        ?>
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="admin/cover/<?php echo $cover;?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                          <?php echo $judul;?>
                          </h2>
                          <p class="fs-15">
                            <div class="btn-group">
                              <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>"
                              class="btn btn-primary stretched-link">Detail</a>
                            </div>
                          </p>
                        </div>
                      </div>
                          <?php }?>
  
                      
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                      </h2>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5>
                                <a href= "index.php?include=detail-berita&data=18" style="color:#000">JPU Hadirkan 9 Saksi di Sidang Ferdi Sambo dan Putri Candrawhati</a></h5>                                
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="assets/images/latestnews/news1.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                              <h5>
                                <a href= "index.php?include=detail-berita&data=23" style="color:#000"> Vladimir Putin: Kami Tidak Gila, Tak Akan Gunakan Bom Nuklir Lebih Dulu</a></h5>                                
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="assets/images/latestnews/news2.jpg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5>
                                <a href= "index.php?include=detail-berita&data=36" style="color:#000">Rupiah Hilang Tenaga, Bakal Sentuh Rp 16.000/US$ Kah?</a></h5>
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="assets/images/latestnews/news3.jpeg"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                          Trending
                        </h2>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="assets/images/trending/1.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600"><a href="index.php?include=detail-berita&data=49" style="color:#000">
                            Portugal Disingkirkan Maroko, Ronaldo Pilih Pensiun?</a>
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="assets/images/trending/2.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600"><a href="index.php?include=detail-berita&data=50" style="color:#000">
                          PSSI Pastikan Lanjutan Liga 1 Digelar Tanpa Penonton Langsung
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->
