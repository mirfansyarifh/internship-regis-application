<?php
session_start();
include '../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "admin") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}
$nidn = $_GET['nidn'];
$nama = $_GET['nama'];
$tema = $_GET['tema'];
$username = $_GET['username'];
$password = $_GET['password'];
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
        <center><div class="card-header">Edit Akun Dosen</div></center>
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
            <form action="aksi_edit_dosen.php" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nidn?>" readonly name="nidn" type="text" id="nidn" class="form-control" placeholder="NIDN" required="required" autofocus="autofocus">
                                <label for="nidn">NIDN</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $nama?>" name="nama" type="text" id="nama" class="form-control" placeholder="Nama" required="required">
                                <label for="nama">Nama</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="form-label-group">
                        <input value="<?php echo $tema?>" name="tema" type="text" id="tema" class="form-control" placeholder="Tema" required="required" autofocus="autofocus">
                        <label for="tema">Tema</label>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $username?>" name="username" type="text" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input value="<?php echo $password?>" name="password" type="text" id="password" class="form-control" placeholder="Password" required="required">
                                <label for="password">Password</label>
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
                <a class="d-block small mt-3" href="./pages/akun_dsn.php">Batal</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    $(function(){

        $('input[name=Mahasiswa]').on('change', function(){

            if(this.checked){
                $('#sample').find('input').not(this).hide();
            }
            else{
                $('#sample').find('input').not(this).show();
            }

        })

    })
</script>

</body>

</html>