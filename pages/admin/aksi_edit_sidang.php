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
$nilai = $_POST['nilai'];
$id_ta = $_POST['id_ta'];
$id_ta_del = $_GET['id_ta'];

if ($aksi == 'edit') {
    /*var_dump($ruang);
    var_dump($status);
    var_dump($idx);
    var_dump($nilai);
    var_dump($id_ta);
    die();*/
    $query_jadwal =
        mysqli_query($connect,
            "UPDATE `jadwal` SET `ruang` = '$ruang', `acc_status` = '$status' WHERE `jadwal`.`idx` = '$idx';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query_ta =
        mysqli_query($connect,
            "UPDATE `ta` SET `nilai` = '$nilai' WHERE `ta`.`id_ta` = '$id_ta';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_jadwal && $query_ta) {
        $_SESSION['successMessage'] = "Edit sukses!";
        header('location:./pages/data_sidangakhir.php');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./pages/data_sidangakhir.php');
    }

}
elseif ($aksi_del == 'delete') {
    /*var_dump($id_ta_del);
    var_dump($idx_del);
    die();*/
    $query1 =
        mysqli_query($connect,
            "UPDATE `ta` SET `nilai` = NULL WHERE `ta`.`id_ta` = '$id_ta_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query2 =
        mysqli_query($connect,
            "DELETE FROM `jadwal` WHERE `jadwal`.`idx` = '$idx_del';"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";

    if ($query1 && $query2) {
        $_SESSION['successMessage'] = "Delete sukses!";
        header('location:./pages/data_sidangakhir.php');
    }
    else {
        $_SESSION['errorMessage'] = mysqli_error($connect);
        header('location:./pages/data_sidangakhir.php');
    }
}