<?php
$koneksi = mysqli_connect("mariadb","myuser","mypass","mydb");
if($koneksi){
    echo "OKE";
}else{
    echo "Gagal";
}
?>