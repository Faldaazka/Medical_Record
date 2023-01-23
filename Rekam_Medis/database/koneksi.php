<?php
//koneksi
$server="localhost";
$username="root";
$password="";
$db="medical_record";

$connect = mysqli_connect($server,$username,$password);
$select_db = mysqli_select_db($connect,$db);
if ($connect) {
    echo "Berhasil terkoneksi <br />";
    if ($select_db) {
        echo "Database ditemukan";
    }else {
        echo "Database tidak ditemukan";
    }
}else {
    echo "gagal terkoneksi";
}
?>