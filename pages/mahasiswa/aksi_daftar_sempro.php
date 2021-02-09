<?php
include "../../koneksi.php";
session_start();
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "mahasiswa") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ./');
}

$id_ta = $_POST['id_ta'];
$nama_dosuji = $_POST['nama_dosuji'];
$nidn_dosuji = $_POST['id_dosuji'];
$tgl_sempro = $_POST['tgl_sempro'];
$ruang_sempro = $_POST['ruang_sempro'];
$nim = $_SESSION['nim'];

$query =
    mysqli_query($connect,
        "INSERT INTO jadwal (id_jadwal, jenis_jadwal, ruang, datetime) 
VALUES ((SELECT id_ta from ta where ta.id_mhs = '$nim'), 'sempro', '$ruang_sempro', '$tgl_sempro');"
    ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";

$query2 = mysqli_query($connect,
    "UPDATE `ta` SET `id_dosuji` = '$nidn_dosuji' WHERE `ta`.`id_ta` = '$id_ta'"
) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";


if($query){
    $_SESSION['successMessage'] = "Pendaftaran Seminar Proposal sukses!";
    header('location:./');
} else {
    $_SESSION['errorMessage'] = "Anda belum daftar TA!";
    header('location:./daftar_sempro.php');
}