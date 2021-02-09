<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}
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
        <div class="card-header">Daftarkan Akun</div>

        <div class="card-body">
            <form action="aksi_register.php" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input name="username" type="text" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input name="password" type="password" id="password" class="form-control" placeholder="Password" required="required">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="form-row">
                        <div class="col-md-12">
                            <input name="nama" type="text" id="nama" class="form-control" placeholder="NAMA" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="form-row">
                        <div class="col-md-12">
                            <input name="nim_nidn" type="text" id="nim-nidn" class="form-control" placeholder="NIM/NIDN" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="">
                    <div class="form-row">
                        <div class="col-md-12">

                            <input name="tema" type="text" id="cek" class="form-control" placeholder="Tema" required="required" show/ >

                        </div>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="form-row">
                        <div class="col-md-12">
                            <select id="status" name="role" class="col-md-12" style ="height: 40px">
                                <option value="" selected hidden disabled>Pilih status</option>
                                <option value="dosen">Dosen</option>
                                <option value="mahasiswa">Mahasiswa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input
                       type="submit"
                       class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                       value="register"
                />
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="index.php">Batal</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript'>
    $(window).load(function(){
        $("#status").change(function() {
            console.log($("#status option:selected").val());
            if ($("#status option:selected").val() == 'mahasiswa') {
                $('#cek').removeAttr('required');
                $('#cek').prop('hidden', 'true');
            } else {
                $('#cek').attr('required', 'required');
                $('#cek').prop('hidden', false);
            }
        });
    });
</script>

</body>

</html>