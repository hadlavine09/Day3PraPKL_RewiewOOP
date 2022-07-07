<?php
        include '../database.php';
        $cetak = new guru();

        if(isset($_POST['save'])){
            $aksi        = $_POST['aksi'];
            $no          = @$_POST['no'];
            $nip         = $_POST['nip'];
            $nama        = $_POST['nama'];
            $alamat      = $_POST['alamat'];

                if ($aksi == "create")
                {
                    $cetak->create($nip,$nama,$alamat);
                    header("location:index.php");
                }

                else if ($aksi == "update") 
                {
                    $cetak->update($no,$nip,$nama,$alamat);
                    header("location:index.php");
                }

                else if ($aksi == "delete")
                {
                    $cetak->delete($no);
                    header("location:index.php");
                }
        }

?>