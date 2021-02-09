<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$nim = $_POST['nim'];
$nim_del = $_GET['nim'];
$aksi = $_POST['aksi'];
$aksi_del = $_GET['aksi'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($aksi == 'edit') {
    $query_dosen =
        mysqli_query($connect,
            "UPDATE `mahasiswa` SET `nama` = '$nama' WHERE `mahasiswa`.`nim` = '$nim';"
        ) or die(mysqli_error($connect));
    $query_user =
        mysqli_query($connect,
            "UPDATE `user` SET `username` = '$username', `password` = '$password' WHERE `user`.`nim` = '$nim';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_dosen && $query_user) {
        $_SESSION['successMessage'] = "Edit sukses!";
        header('location:./pages/akun_mhs.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/akun_mhs.php');
    }

}
elseif ($aksi_del == 'delete') {
    $query =
        mysqli_query($connect,
            "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`nim` = '$nim_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query) {
        $_SESSION['successMessage'] = "Delete sukses!";
        header('location:./pages/akun_mhs.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/akun_mhs.php');
    }
}
