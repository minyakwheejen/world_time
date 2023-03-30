<?php 
session_start();
include('../koneksi/koneksi.php');
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
  }else if($include=="konfirmasi-edit-profil"){
    include("include/konfirmasieditprofil.php");
  }
  else if($include=="signout"){
    include("include/signout.php");
  }else if($include=="konfirmasi-tambah-kategori-berita"){
    include("include/konfirmasitambahkategoriberita.php");
  }else if($include=="konfirmasi-edit-kategori-berita"){
    include("include/konfirmasieditkategoriberita.php");
  }
  else if($include=="konfirmasi-tambah-tag"){
    include("include/konfirmasitambahtag.php");
  }else if($include=="konfirmasi-edit-tag"){
    include("include/konfirmasiedittag.php");
  }
  else if($include=="konfirmasi-tambah-penulis"){
    include("include/konfirmasitambahpenulis.php");
  }else if($include=="konfirmasi-edit-penulis"){
    include("include/konfirmasieditpenulis.php");
  }
  else if($include=="konfirmasi-tambah-konten"){
    include("include/konfirmasitambahkonten.php");
  }else if($include=="konfirmasi-tambah-kategori-konten"){
    include("include/konfirmasitambahkategorikonten.php");
  }else if($include=="konfirmasi-edit-kategori-konten"){
    include("include/konfirmasieditkategorikonten.php");
  }
  else if($include=="konfirmasi-tambah-berita"){
    include("include/konfirmasitambahberita.php");
  }else if($include=="konfirmasi-edit-berita"){
    include("include/konfirmasieditberita.php");
  }
  else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasieditkonten.php");
  }
  else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasitambahuser.php");
  }else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasiedituser.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
      //pemanggilan file yg perlu login
      ?>
      <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
          if($include=="edit-profil"){
            include("include/editprofil.php");
          }else if($include=="kategori-berita"){
            include("include/kategoriberita.php");
          }else if($include=="tambah-kategori-berita"){
            include("include/tambahkategoriberita.php");
          }else if($include=="edit-kategori-berita"){
            include("include/editkategoriberita.php");
          }
          else if($include=="tag"){
            include("include/tag.php");
          }else if($include=="tambah-tag"){
            include("include/tambahtag.php");
          }else if($include=="edit-tag"){
            include("include/edittag.php");
          }
          else if($include=="penulis"){
            include("include/penulis.php");
          }else if($include=="tambah-penulis"){
            include("include/tambahpenulis.php");
          }else if($include=="edit-penulis"){
            include("include/editpenulis.php");
          }
          else if($include=="kategori-konten"){
            include("include/kategorikonten.php");
          }else if($include=="tambah-kategori-konten"){
            include("include/tambahkategorikonten.php");
          }else if($include=="edit-kategori-konten"){
            include("include/editkategorikonten.php");
          }else if($include=="berita"){
            include("include/berita.php");
          }else if($include=="tambah-berita"){
            include("include/tambahberita.php");
          }else if($include=="edit-berita"){
            include("include/editberita.php");
          }else if($include=="detail-berita"){
            include("include/detailberita.php");
          }else if($include=="konten"){
            include("include/konten.php");
          }else if($include=="tambah-konten"){
            include("include/tambahkonten.php");
          }else if($include=="edit-konten"){
            include("include/editkonten.php");
          }else if($include=="detail-konten"){
            include("include/detailkonten.php");
          }else if($include=="user"){
            include("include/user.php");
          }else if($include=="tambah-user"){
            include("include/tambahuser.php");
          }else if($include=="edit-user"){
            include("include/edituser.php");
          }else if($include=="detail-user"){
            include("include/detailuser.php");
          }
          else{
            include("include/profil.php");
          }  
          ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>

    <?php
  	}else{
    //pemanggilan halaman form login
    include("include/login1.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
  //pemanggilan ke halaman-halaman profil jika ada session
  ?>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
        <?php
          //pemanggilan profil
          include("include/profil.php");
        ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
    <?php
  }else{
  //pemanggilan halaman form login
    include("include/login1.php");
  } 
}
?>

</html>
