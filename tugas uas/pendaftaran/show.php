<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <style>
        *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
body{
    background: #999;
}
nav{
    height: 80px;
    width: 100%;
    background: rgba(0,0,0,0.4);
    border-bottom: 1px solid wheat;
}
nav .logo{
    font-size: 35px;
    line-height: 80px;
    font-weight: bold;
    color: white;
    padding: 0 50px;
    text-transform: uppercase;
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 50px;
}
nav ul li a{
    font-size: 17px;
    text-transform: uppercase;
    color: white;
    padding: 10px 17px;
    border-radius: 3px;
}
ul a:hover{
    background: rgba(0,0,0,0.6);
    transition: 0.5s;
}
.btn1{
    float: right;
    font-size: 30px;
    color: white;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
}
#check{
    display: none;
}
@media (max-width:952px){
    nav.logo{
        font-size: 30px;
        padding-left: 50px;
    }
    nav ul li a{
        font-size: 16px;
    }
}
@media(max-width:858px){
    .btn{
        display: block;
    }
    ul{
        height: 100vh;
        width: 100%;
        position: fixed;
        top: 80px;
        left: -100%;
        text-align: center;
        background: rgba(0,0,0,0.2);
        transition: all .5s;
    }
    #check:checked ~ ul{
        left: 0;
    }
    nav ul li{
        margin: 50px 0;
        line-height: 30px;
        display: block;
    }
    nav ul li a{
        font-size: 20px;
    }
}
    </style>
    <title>Pendaftaran</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="btn1">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">alex.grup</label>
        <ul>
            <li><a class="active" href="../home/home.php">beranda</a></li>
            <li><a href="../jurusan/index.php">jurusan</a></li>
            <li><a href="../pendaftaran/index.php">pendaftaran</a></li>
            <li><a href="../pembayaran/index.php">pembayaran</a></li>
        </ul>
    </nav>
        <br><br><center><h2></h2></center>
        <!-- CARDs -->
        <div class="container-fluid">
        <div class="card" style=" opacity: 1.7;
                                 border: 1px solid;
                                 padding: 10px;
                                 box-shadow: 10px 21px 10px;">
            <div class="card-header" style="background-color: white  ;">
            <div class="card-header"style= "background:#999;">
                Data Pendaftaran
            </div>
            <div class="card-body">
            <?php
                include '../database_uas.php';
                $pendaftaran = new pendaftaran();
                foreach ($pendaftaran->show($_GET['id']) as $data) {
                    $id               = $data['id'];
                    $kode_pendaftaran = $data['kode_pendaftaran'];
                    $nama             = $data['nama'];
                    $tanggal_lahir    = $data['tanggal_lahir'];
                    $tempat_lahir     = $data['tempat_lahir'];
                    $jenis_kelamin    = $data['jenis_kelamin'];
                    $agama            = $data['agama'];
                    $id_jurusan       = $data['jurusan'];
                    
                }
            ?>
            <form action="" method="">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Pendaftaran</label> 
                        <input type="text" class="form-control" name="kode_pendaftaran" value="<?php echo $kode_pendaftaran; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" disabled>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" disabled>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" disabled>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input type="text" class="form-control" name="agama" value="<?php echo $agama; ?>" disabled>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?php echo $id_jurusan; ?>" disabled>
                    </div>
                    
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </form>

            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>