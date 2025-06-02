<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $No = mysqli_real_escape_string($koneksi, $_POST['No']);
    $NamaKegiatan = mysqli_real_escape_string($koneksi, $_POST['NamaKegiatan']);
    $WaktuKegiatan = mysqli_real_escape_string($koneksi, $_POST['WaktuKegiatan']);
    
    // Cek apakah id sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM db_elysa WHERE No = '$No'");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: index.php?status=gagal&pesan=No sudah terdaftar");
        exit();
    }
    
    // Query tambah data
    $query = "INSERT INTO db_elysa (No, NamaKegiatan, WaktuKegiatan) VALUES ('$No', '$NamaKegiatan', '$WaktuKegiatan')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
} else {
    header("Location: index.php");
}
?>