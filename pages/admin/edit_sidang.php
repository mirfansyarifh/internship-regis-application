<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

$nama_mhs = $_GET['nama_mhs'];
$nama_dosbing = $_GET['nama_dosbing'];
$nim = $_GET['nim'];
$datetime = $_GET['datetime'];
$status = $_GET['status'];
$ruang = $_GET['ruang'];
$nama_dosuji = $_GET['nama_dosuji'];
$idx = $_GET['idx'];
$id_dosbing = $_GET['id_dosbing'];
$nilai = $_GET['nilai'];
$id_ta = $_GET['id_ta'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - APSI</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <center><div class="card-header">Edit Sidang</div></center>
        <div class="card-body">
            <form action="aksi_edit_sidang.php" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input readonly value="<?php echo $nim; ?>" name="nim" type="text" id="nim" class="form-control" placeholder="NIM" required="required" autofocus="autofocus">
                                <label for="nim">NIM</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input readonly value="<?php echo $nama_mhs; ?>" name="nama_mhs" type="text" id="nama" class="form-control" placeholder="Nama" required="required">
                                <label for="nama">Nama</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $status; ?>" name="status" type="text" id="status" class="form-control" placeholder="Judul" required="required" autofocus="autofocus">
                                <label for="status">Status</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $ruang; ?>" name="ruang" type="text" id="ruang" class="form-control" placeholder="Judul" required="required" autofocus="autofocus">
                                <label for="ruang">Ruang</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6" id="idx">
                            <div class="form-label-group">
                                <input value="<?php echo $idx; ?>" name ="idx" type="text"  class="form-control" placeholder="Tema" required="required">
                            </div>
                        </div>
                        <div class="col-md-6" id="id_ta">
                            <div class="form-label-group">
                                <input value="<?php echo $id_ta; ?>" name ="id_ta" type="text"  class="form-control" placeholder="Tema" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $datetime; ?>" name="tanggal" type="date" id="tanggal" class="form-control" placeholder="Judul" required="required" autofocus="autofocus">
                                <label for="tanggal">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nilai; ?>" name ="nilai" type="text" id="nilai" class="form-control" placeholder="Nilai" required="required">
                                <label for="nilai">Nilai</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<input type="text" name="id_ta" value="<?php /*echo $id_ta; */?>" id="id_ta">-->
                <input name="aksi"
                       type="submit"
                       class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                       value="edit"
                />
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="./pages/data_sidangakhir.php">Batal</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(()=>{
    $('#id_ta').prop('hidden', 'true');
    //$('#ruang').prop('hidden', 'false');
    $('#idx').prop('hidden', 'true');
});
</script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>