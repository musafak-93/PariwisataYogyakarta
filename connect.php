<?php
    $_host = "localhost";
    $_user = "pkwcemercy";
    $_pass = "E,+[9Od)xptK";
    $_db   = "pkwcemercy_db.109";

    $connect = new mysqli($_host,$_user,$_pass,$_db);

    if($connect) {
        //echo "Sukses koneksi ke server!!";
    }else{
        echo "Gagal koneksi ke server!!";
        exit();
    }