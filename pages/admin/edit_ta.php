<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}
$id_ta = $_GET['id_ta'];
$nama_mhs = $_GET['nama_mhs'];
$nama_dosbing = $_GET['nama_dosbing'];
$nim = $_GET['nim'];
$tema = $_GET['tema'];
$judul = $_GET['judul'];
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
        <center><div class="card-header">Edit TA</div></center>
        <?php
        if(isset($_SESSION["errorMessage"])) {
            ?>
            <div style="padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
    margin: 30px 10px 10px 10px;"><?php echo $_SESSION["errorMessage"]; ?></div>
            <?php
            unset($_SESSION["errorMessage"]);
        }

        elseif (isset($_SESSION["successMessage"])) {
            ?>
            <div style="padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: green;
    border-radius: 4px;
    margin: 30px 10px 10px 10px;"><?php echo $_SESSION["successMessage"]; ?></div>
            <?php
            unset($_SESSION["successMessage"]);
        }
        ?>
        <div class="card-body">
            <form action="aksi_edit_ta.php" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nim?>" name="nim" type="text" id="nim" class="form-control" placeholder="NIM" required="required" autofocus="autofocus" readonly>
                                <label for="nim">NIM</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nama_mhs?>" name="nama_mhs" type="text" id="nama" class="form-control" placeholder="Nama" required="required" readonly>
                                <label for="nama">Nama</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $judul?>" name="judul" type="text" id="judul" class="form-control" placeholder="Judul" required="required" autofocus="autofocus">
                                <label for="judul">Judul</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $tema?>" name ="tema" type="text" id="tema" class="form-control" placeholder="Tema" required="required" >
                                <label for="tema">Tema</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nama_dosbing?>" name ="nama_dosbing" type="text" id="pembimbing" class="form-control" placeholder="Pembimbing" required="required" autofocus="autofocus">
                                <label for="pembimbing">Pembimbing</label>
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-label-group">
                                <input value="<?php echo $id_ta?>" name ="id_ta" type="text" id="pembimbing" class="form-control" placeholder="Pembimbing" required="required" autofocus="autofocus" readonly>
                                <label for="pembimbing">ID TA</label>
                            </div>
                        </div>

                    </div>
                </div>
                <input name="aksi"
                       type="submit"
                       class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                       value="edit"
                />
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="./">Batal</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>


</body>

</html>