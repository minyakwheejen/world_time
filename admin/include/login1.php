<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 1</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="overlay"></div>
    <form action="index.php?include=konfirmasi-login" method="post" class="box">
        <div class="header">
            <h4>Login to WorldTime </h4>
            <p>
                Silahkan Masukkan email dan username kamu
            </p>
        </div>
        <div class="login-area">
            <?php if(!empty($_GET['gagal'])){?>
            <?php if($_GET['gagal']=="userKosong"){?>
            <span class="text-danger">
                Maaf Username Tidak Boleh Kosong
            </span>
            <?php } else if($_GET['gagal']=="passKosong"){?>
            <span class="text-danger">
                Maaf Password Tidak Boleh Kosong
            </span>
            <?php } else {?>
            <span class="text-danger">
                Maaf Username dan Password Anda Salah
            </span>
            <?php }?>
            <?php }?>

            <form action="index.php?include=konfirmasi-login" method="post" class="box">
                <input type="text" class="username" name="username" placeholder="Username">
                <input type="password" class="password" name="password" placeholder="Password">

                <input type="submit" name="login"login value="login" class="submit">
        </div>
    </form>
</body>

</html>