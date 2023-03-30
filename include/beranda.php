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
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8">
                <div class="position-relative">
                  <img
                    src="assets/images/dashboard/5.jpg"
                    alt="banner"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      global news
                    </div>
                    <h1 class="mb-2"><a href="index.php?include=detail-berita&data=26">
                    AS Respons Keras Kunjungan Presiden China Xi Jinping ke Arab Saudi</a>
                    </h1>
                    <div class="fs-12">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2><a style="color:#fff">Latest news</a></h2>

                    <div
                      class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=18">JPU Hadirkan 9 Saksi di Sidang Ferdi Sambo dan Putri Candrawhati</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_1.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=23"> Vladimir Putin: Kami Tidak Gila, Tak Akan Gunakan Bom Nuklir Lebih Dulu</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_2.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5><a href="index.php?include=detail-berita&data=36">Rupiah Hilang Tenaga, Bakal Sentuh Rp 16.000/US$ Kah?</a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_3.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Tag Berita</h2>
                    <ul class="vertical-menu">
                      <li><a href="#">Politik</a></li>
                      <li><a href="#">Viral</a></li>
                      <li><a href="#">Olahraga</a></li>
                      <li><a href="#">Sepak Bola</a></li>
                      <li><a href="#">Badminton</a></li>
                      <li><a href="#">Bisnis</a></li>
                      <li><a href="#">Gaya Hidup</a></li>
                      <li><a href="#">Covid 19</a></li>
                      <li><a href="#">Teknologi</a></li>
                      <li><a href="#">Uang</a></li>
                      <li><a href="#">Korupsi</a></li>
                      <li><a href="#">Kriminal</a></li>
                      <li><a href="#">Properti</a></li>
                      <li><a href="#">Tren</a></li>
                      <li><a href="#">Sains</a></li>
                      <li><a href="#">Selebriti</a></li>
                      <li><a href="#">Film</a></li>
                      <li><a href="#">Edukasi</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/home_66.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600" ><a href="index.php?include=detail-berita&data=21" style="color:#000">
                        Cak Imin Terima Banyak Bisikan untuk Tidak Nyapres pada Pilpres 2024</a>
                        </a></h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/cover ekonomi 5.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=37" style="color:#000">
                        Dampak Positif KTT G20 Terhadap Ekonomi Indonesia Selaku Tuan Rumah</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/cover pariwisata 3.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=30" style="color:#000">
                        Indonesia Resmi Daftarkan Kebaya ke UNESCO lewat Single Nominations</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/d.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=47" style="color:#000">
                        The Glory, Drama Terbaru Song Hye-kyo Tayang 30 Desember</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/e.jpeg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600"><a href="index.php?include=detail-berita&data=43" style="color:#000">
                        Ginting Takluk dari Axelsen di BWF World Tour Finals 2022</a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Video
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/fl1NdojgVz4" title="Demi Menemui Pacar, ART di Bekasi Nekat Kurung Anak Majikan di Dalam Rumah!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/GiYpTvg6eXM" title="Cemburu, Pria di Jakarta Barat Bakar Motor Bos Konveksi!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/77lkG-J0NUE" title="Kronologi Pencurian dan Penyekapan di Rumah Dinas Wali Kota Blitar, Santoso" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                              <iframe width="322" height="188" src="https://www.youtube.com/embed/N4Z_XBqLbdc" title="Inilah Tingkah Lucu Para Cucu Presiden Joko Widodo!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  >
                                  </
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Latest Video
                          </div>
                          <p class="mb-3">See all</p>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="assets/images/dashboard/home_61.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href= "https://www.youtube.com/watch?v=mt2aGgd5D2Y" style= "color:#000">Saat Elon Musk Diomeli Ibunya Gara-Gara Bilang Begini!</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="assets/images/dashboard/home_62.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href= "https://www.youtube.com/watch?v=-ELgaLkm2-Y" style= "color:#000">Soimah Unboxing Isi Souvenir Pernikahan Kaesang dan Erina</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="assets/images/dashboard/home_63.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href="https://www.youtube.com/shorts/VZUdilkmttw" style="color:#000">Sah! Indonesia Jadi Negara Ke-10 Operator Pesawat Militer 'Jumbo' Airbus</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="assets/images/dashboard/home_64.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href="https://www.youtube.com/watch?v=CDRKOnxKgBQ" style="color:#000">Kocak ! Pak Jokowi Sampai Ketawa Dengar Gibran Kenalkan Kaesang Ke Keluarga Erina Gudono</a>
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="assets/images/dashboard/home_65.jpeg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3><a href="https://www.youtube.com/watch?v=jLlHjpgszzA" style="color:#000">DPR Setujui Pemberhentian dengan Hormat Panglima TNI Jendral Andika</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="card-title" style="color:#000">
                          Sport light
                        </div>
                        <div class="row">
                          <div class="col-xl-12">
                          <?php
                          $sql_b= "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis`, `b`. `cover` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`
                          WHERE 	`b`.`id_kategori_berita`=3 ORDER BY `b`.`id_berita` DESC";
                          $query_b = mysqli_query($koneksi, $sql_b);
                          while($data_b = mysqli_fetch_row($query_b)){
                            $id_berita = $data_b[0];
                            $judul = $data_b[1];
                            $kategori_berita= $data_b[2];
                            $penulis=$data_b[3];
                            $cover=$data_b[4];

                          ?>
                            <div class="border-bottom pb-3 mb-3">
                              <h3><a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" style="color:#000">
                                <?php echo $judul;?>
                              </a></h3>
                            </div>
                            <?php };?>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card-title" style="color:#000">
                              Sport light
                            </div>
                            <?php
                              $sql_b= "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis`, `b`. `cover` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`
                              WHERE 	`b`.`id_kategori_berita`=8 ORDER BY `b`.`id_berita` DESC";
                              $query_b = mysqli_query($koneksi, $sql_b);
                              while($data_b = mysqli_fetch_row($query_b)){
                                $id_berita = $data_b[0];
                                $judul = $data_b[1];
                                $kategori_berita= $data_b[2];
                                $penulis=$data_b[3];
                                $cover=$data_b[4];

                              ?>
                            <div class="border-bottom pb-3">
                              <div class="rotate-img">
                                <img
                                  src="admin/cover/<?php echo $cover;?>"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <p class="fs-16"><a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" style="color:#000">
                                <?php echo $judul;?></a>
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                              </p>
                            </div>
                            <?php };?>
                          </div>
                          <div class="col-sm-6">
                            <div class="card-title">
                              Celebrity news
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="border-bottom pb-4">
                                  <div class="row">
                                  <?php
                                    $sql_b= "SELECT `b`.`id_berita`, `b`.`Judul`, `k`.`kategori_berita`, `p`.`penulis`, `b`. `cover` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` =  `k`.`id_kategori_berita` INNER JOIN `penulis` `p` ON `b`.`id_penulis` = `p`.`id_penulis`
                                    WHERE 	`b`.`id_kategori_berita`=4 ORDER BY `b`.`id_berita` DESC";
                                    $query_b = mysqli_query($koneksi, $sql_b);
                                    while($data_b = mysqli_fetch_row($query_b)){
                                      $id_berita = $data_b[0];
                                      $judul = $data_b[1];
                                      $kategori_berita= $data_b[2];
                                      $penulis=$data_b[3];
                                      $cover=$data_b[4];

                                    ?>
                                    <div class="col-sm-5 pr-2">
                                      <div class="rotate-img">
                                        <img
                                          src="admin/cover/<?php echo $cover;?>"
                                          alt="thumb"
                                          class="img-fluid w-100"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-sm-7 pl-3">
                                      <p class="fs-12 font-weight-600 mb-0">
                                        <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" style="color:#000"><?php echo $judul;?></a>
                                      </p>
                                    </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>