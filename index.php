<?php 
include("koneksi/koneksi.php");

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <?php include('includes/head.php');?>
</head>
<body>
  <?php include('includes/_navbar.php');?>
    <?php
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="nasional"){
        include("include/nasional.php");
      }else if($include=="internasional"){
        include("include/internasional.php");
      }else if($include=="olahraga"){
        include("include/olahraga.php");
      }else if($include=="hiburan"){
        include("include/hiburan.php");
      }else if ($include=="ekonomi"){
        include("include/ekonomi.php");
      }else if ($include=="pariwisata"){
        include("include/pariwisata.php");
      }else if($include=="kontak"){
        include("include/kontak.php");
      }else if($include=="about-us"){
        include("include/aboutus.php");
      }else if($include=="advertise"){
        include("include/advertise.php");
      }else if($include=="detail-berita"){
        include("include/detailberita.php");
      }else{
        include("include/beranda.php");
      }
    }else{
      include("include/beranda.php");
    }
    //   if(isset($_get["include"])){ 
    //     $include=$_GET["include"];
    //   if($include=="nasional"){
    //     include("include/nasional.php");
    //   }else if($include=="internasional"){
    //     include("include/internasional.php");
    //   }else if($include=="olahraga"){
    //     include("include/olahraga.php");
    //   }else if($include=="hiburan"){
    //     include("include/hiburan.php");
    //   }else if($include=="ekonomi"){
    //     include("include/ekonomi.php");
    //   }else if($include=="pariwisata"){
    //     include("include/pariwisata.php");
    //   }else if($include=="kontak"){
    //     include("include/kontak.php");
    //   }else if($include=="detail-berita"){
    //     include("include/detailberita.php");
    // }else{
    //   include("include/beranda.php");
    // }
    //   }
    ?> 
    </div> 
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
<footer>
        <?php include('includes/_footer.php');?>
</footer>

        <!-- partial -->
  </div>
    <?php include('includes/script.php');?>
</body>
</html>
