<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$nidn = $_POST['nidn'];
$nidn_del = $_GET['nidn'];
$aksi = $_POST['aksi'];
$aksi_del = $_GET['aksi'];
$nama = $_POST['nama'];
$tema = $_POST['tema'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($aksi == 'edit') {
    $query_dosen =
        mysqli_query($connect,
            "UPDATE `dosen` SET `nama` = '$nama', `nama_tema` = '$tema' WHERE `dosen`.`nidn` = '$nidn';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query_user =
        mysqli_query($connect,
        "UPDATE `user` SET `username` = '$username', `password` = '$password' WHERE `user`.`nidn` = '$nidn';"
    ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_dosen && $query_user) {
        $_SESSION['successMessage'] = "Edit berhasil!";
        header('location:./pages/akun_dsn.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/akun_dsn.php');
    }

}
elseif ($aksi_del == 'delete') {
    $query =
        mysqli_query($connect,
            "DELETE FROM `dosen` WHERE `dosen`.`nidn` = '$nidn_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query) {
        $_SESSION['successMessage'] = "Delete berhasil!";
        header('location:./pages/akun_dsn.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/akun_dsn.php');
    }
}
