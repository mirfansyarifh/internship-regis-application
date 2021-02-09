<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$idx = $_POST['idx'];
$idx_del = $_GET['idx'];
$aksi = $_POST['aksi'];
$aksi_del = $_GET['aksi'];
$nama_mhs = $_POST['nama_mhs'];
$nama_dosbing = $_POST['nama_dosbing'];
$nama_dosuji = $_POST['nama_dosuji'];
$nim = $_POST['nim'];
$datetime = $_POST['datetime'];
$status = $_POST['status'];
$ruang = $_POST['ruang'];
$id_dosbing = $_POST['id_dosbing'];
$nim_del = $_GET['nim'];


if ($aksi == 'edit') {
    $query_jadwal =
        mysqli_query($connect,
            "UPDATE `jadwal` SET `ruang` = '$ruang', `datetime` = '$datetime', `acc_status` = '$status' WHERE `jadwal`.`idx` = '$idx';"
        ) or die(mysqli_error($connect));
    $query_ta =
        mysqli_query($connect,
            "UPDATE `ta` SET `id_dosuji` = '$id_dosbing', `id_dosbing` = '$id_dosbing' WHERE `ta`.`id_mhs` = '$nim';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_jadwal && $query_ta) {
        $_SESSION['successMessage'] = "Edit sukses!";
        header('location:./pages/data_sempro.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/data_sempro.php');
    }

}
elseif ($aksi_del == 'delete') {
    $query =
        mysqli_query($connect,
            "UPDATE `ta` SET `id_dosuji` = NULL WHERE `ta`.`id_mhs` = '$nim_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query2 =
        mysqli_query($connect,
        "DELETE FROM `jadwal` WHERE `jadwal`.`idx` = '$idx_del'") or $_SESSION['errorMessage'] = mysqli_error($connect);
    if ($query) {
        $_SESSION['successMessage'] = "Delete sukses!";
        header('location:./pages/data_sempro.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/data_sempro.php');
    }
}