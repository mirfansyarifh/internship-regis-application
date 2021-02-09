<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$id_ta = $_POST['id_ta'];
$id_ta_del = $_GET['id_ta'];
$aksi = $_POST['aksi'];
$aksi_del = $_GET['aksi'];
$nama_mhs = $_POST['nama_mhs'];
$nama_dosbing = $_POST['nama_dosbing'];
$nim = $_POST['nim'];
$tema = $_POST['tema'];
$judul = $_POST['judul'];


if ($aksi == 'edit') {
    $query_ta =
        mysqli_query($connect,
            "UPDATE `ta` SET `judul` = '$judul', `tema` = '$tema', `id_mhs` = '$nim', `id_dosbing` = (select nidn from dosen where dosen.nama='$nama_dosbing') WHERE `ta`.`id_ta` = '$id_ta';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_ta) {
        $_SESSION['successMessage'] = "Edit sukses!";
        header('location:./');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./');
    }

}
elseif ($aksi_del == 'delete') {
    $query =
        mysqli_query($connect,
            "DELETE FROM `ta` WHERE `ta`.`id_ta` = '$id_ta_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query) {
        $_SESSION['successMessage'] = "Delete sukses!";
        header('location:./');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./');
    }
}
