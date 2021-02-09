<?php
include '../../koneksi.php';
session_start();
if (empty($_SESSION["user_id"]) || $_SESSION['role'] != "mahasiswa") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Tugas Akhir </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project."/>
    <meta name="keywords"
          content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive"/>
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>

<body class="fix-menu">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="loader-bar"></div>
    </div>
</div>
<!-- Pre-loader end -->
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                <div class="signup-card card-block auth-body mr-auto ml-auto">
                    <form class="md-float-material" action="aksi_daftar_ta.php" method="post">
                        <div class="text-center">

                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Daftarkan Tugas Akhir-mu disini!</h3>
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
                                </div>
                            </div>
                            <hr/>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="NIM" disabled
                                       value="<?php echo $_SESSION['nim'];?>">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nama" disabled
                                       value="<?php echo $_SESSION['name'];?>">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input name="judul" type="text" class="form-control" placeholder="Judul" required>
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <select name="tema" name="tema" id="tema" class="form-controls" style="width: 650px; height: 30px;" required>
                                    <option selected disabled hidden value="kg">Pilih Tema</option>
                                    <?php
                                    $query = "SELECT * FROM dosen"; $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                    <option value="<?php echo $row['nama_tema'];
                                    ?>"><?php echo $row['nama_tema']; ?></option>
                                    <?php } ?>
                                    <?php// while ($temas = mysqli_fetch_array(mysqli_query($connect, "SELECT * from dosen"))) {echo '<option value='.$temas->nama_tema.'>'.$tema->nama_tema.'</option>';}?>
                                </select>
                            </div>
                            <div class="input-group">
                                <input name="id_dosbing" type="text" class="form-control" placeholder="NIDN Dosen Pembimbing" required>
                                <span class="md-line"></span>
                            </div>
                            <div class="row m-t-25 text-left">
                                <!-- Bisa untuk text notice! -->
                                <!-- <div class="col-md-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Send me the <a href="#!">Newsletter</a> weekly.</span>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <input type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                           value="Daftar sekarang!"
                                    />

                                </div>
                                <div class="col-md-12">
                                    <button onclick="location.href='./'" type="button"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                        Batalkan
                                    </button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Setelah mendaftar Tugas Akhir,</p>
                                    <p class="text-inverse text-left"><b>Harap lakukan bimbingan dengan dosen terkait
                                            ya!</b></p>
                                </div>
                                <!-- <div class="col-md-2">
                                    <img src="../../assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                </div> -->
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../../assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../../assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../../assets/js/modernizr/css-scrollbars.js"></script>
<script type="text/javascript" src="../../assets/js/common-pages.js"></script>
</body>

</html>
