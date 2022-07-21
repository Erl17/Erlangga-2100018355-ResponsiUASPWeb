<?php
    $nama       =$_POST['nama'];
    $alamat     =$_POST['alamat'];
    $email      =$_POST['email'];
    $mobil      =$_POST['mobil'];
    $jaminan    =$_POST['jaminan'];
    $tambah     =$_POST['tambah']; 

    echo "<head><title>PESANAN CUSTOMER CAR LEASINGKU</head></title>";
    $fp = fopen("leasing.txt","a+");
    fputs($fp,"$nama|$alamat|$email|$mobil|$tambah\n");
    fclose($fp);

    echo "Terima Kasih<br>";
?>