<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$role = $_POST['role'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$nim_nidn = $_POST['nim_nidn'];
$tema = $_POST['tema'];

if ($role == 'dosen') {
    $nidn = $nim_nidn;
    $query_user =
        mysqli_query($connect,
            "INSERT INTO `dosen` (`nama`, `nidn`, `nama_tema`) VALUES ('$nama', '$nidn', '$tema');"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query_dosen = mysqli_query($connect,
        "INSERT INTO `user` (`username`, `password`, `nidn`) 
VALUES ('$username', '$password', '$nidn');"
    ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_user && $query_dosen) {
        $_SESSION['successMessage'] = "Pendaftaran sukses!";
        header('location:./');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./');
    }
}
elseif ($role == 'mahasiswa') {
    $nim = $nim_nidn;
    $query_mhs =
        mysqli_query($connect,
            "INSERT INTO `mahasiswa` (`nama`, `nim`) VALUES ('$nama', '$nim');"
        ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    $query_user = mysqli_query($connect,
        "INSERT INTO `user` (`username`, `password`, `nim`) 
VALUES ('$username', '$password', '$nim');"
    ) or $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
    if ($query_user && $query_mhs) {
        $_SESSION['successMessage'] = "Pendaftaran sukses!";
        header('location:./');
    }
    else {
        $_SESSION['errorMessage'] = "Masukkan data dengan benar!";
        header('location:./');
    }
}
