<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>details</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>

<?php 
include 'koneksi1.php';
$data = mysqli_query($tambah,"select * from product");
while($b = mysqli_fetch_assoc($data)){
    ?>
<body style="background-color: rgba(245, 245, 245, 0.74);">
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 col-md-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card rounded shadow-sm border-1">
                    <img class="card-img-top"
                        src="<?= $b['Gambar'];?>"
                        alt="Card image cap">
                        <div class="card-body text-dark">
                        <p class="card-title text-truncate"><?= $b['nama'];?></p>
                        <h6 class="card-subtitle text-danger"><? $b['harga'];?></h6>
                        <p class="card-text text-truncate"><small><?= $b['deskripsi'];?></small>
                        </p>
                    </div>
                </div></a>
            </div>
            
            <div class="col-12 col-xs-12 col-md-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mt-10 card rounded shadow-sm border-1" >
                    <div class="card-body text-dark">
                        <h3 class="card-title">Deskripsi produk</h3><br><br/>
                        <h6 class="card-subtitle"><?= $b['nama'];?></a></h6>
                        <br>
                        <p class="card-subtitle">Kategori: Earphone
                            <br>
                            <br/>
                            Fatures :
                            <ul>
                                <li><?= $b['deskripsi'];?></li>
                            </ul>
                            <br>
                            <br/>
                            GARANSI RESMI HYPERX 2 TAHUN
                            HARAP CEK STOCK SEBELUM ORDER
                            <br>
                            <br/>
                            CONTACT PERSON :
                            Visit : wwwchemicygamingcom
                            Whatsapp : 08980342062
                            Facebook : Chemicy Gaming
                            Instagram : chemicygaming
                            Line@ : @chemicygaming
                        </p><br>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-md-12 col-md-2 col-lg-2 col-xl-2">
                <div class="mt-10 card rounded shadow-md border-1" >
                <div class="card-body text-dark">
                    <h6>Pilih Varian</h6>
                    <p class="card-text text-disabled">Warna<br>
                        <input type="text" placeholder="Pilih Warna" style="width: 130px;">
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php }
?>
</body>
</html>