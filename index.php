<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <br>
    <!-- Cek Notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login Gagal! Username Dan Password Salah!";
    }elseif($_GET['pesan'] == "logout"){
        echo "Anda Berhasil Logout";
    }elseif($_GET['pesan'] == "belum_login"){
        echo "Anda Harus Login Dulu Untuk Mengakses halaman login";
    }
}?>
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                Selamat Datang Silahkan Login
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-xl-12 login-form">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12 col-xll-12 login-form">
                        <form method="post" action="cek_login.php">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="loginbttm">
                                <div class="login-btm login-text">
                                <?php
                                if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "gagal"){
                                    echo "Login Gagal! Username Dan Password Salah!";
                                }elseif($_GET['pesan'] == "logout"){
                                     echo "Anda Berhasil Logout";
                                }elseif($_GET['pesan'] == "belum_login"){
                                     echo "Anda Harus Login Dulu Untuk Mengakses halaman login";
                                }
                                }?>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html