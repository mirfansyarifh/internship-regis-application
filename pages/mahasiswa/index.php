<?php
session_start();
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "mahasiswa") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../../assets/css/smoothproducts.css">

    <!-- Meta AdminPage-->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="../../assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.mCustomScrollbar.css">
    <!-- Meta AdminPage-->

</head>

<body>
<!-- Navbar dari AdminPage Bootstrap -->
<div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">                   

                   <div class="navbar-container container-fluid">
                      
                       <ul class="nav-right">                           
                           
                           <li class="user-profile header-notification">
                               <a href="#!">                                   <span>Halo! <?php echo $_SESSION['name']; ?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">                                
                                   <li>
                                       <a href="profile_script/profile_user.php">
                                           <i class="ti-user"></i> Profile
                                       </a>
                                   </li>                                   
                                   <li>
                                       <a href="../../logout.php">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
<!-- Navbar dari AdminPage Bootstrap -->
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Sistem Informasi Tugas Akhir</h2>
                    <h2 class="text-info">S1 Teknik Industri</h2>
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
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../../assets/icon/icon-ta.svg">
                            <div class="card-body info">
                                <h4 class="card-title">Tugas Akhir</h4>
                                <button onclick="cek_status('cek_ta')" class="btn btn-primary">Ayo segera Tugas Akhir!</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../../assets/icon/icon-kp.svg">
                            <div class="card-body info">
                                <h4 class="card-title" >Seminar Proposal</h4>
                                <button onclick="cek_status('cek_sempro')" class="btn btn-primary">Ayo segera Sempro!</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../../assets/icon/icon-sidang.svg">
                            <div class="card-body info">
                                <h4 class="card-title">Sidang Akhir</h4>
                                <button onclick="cek_status('cek_sidang')" class="btn btn-primary">Ayo segera Sidang!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../../assets/js/smoothproducts.min.js"></script>
    <script src="../../assets/js/theme.js"></script>

            <!-- Required AdminPage Jquery -->
        <script type="text/javascript" src="../../assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="../../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="../../assets/js/modernizr/modernizr.js"></script>
        <!-- am chart -->
        <script src="../../assets/pages/widget/amchart/amcharts.min.js"></script>
        <script src="../../assets/pages/widget/amchart/serial.min.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="../../assets/js/chart.js/Chart.js"></script>
        <!-- Todo js -->
        <script type="text/javascript " src="../../assets/pages/todo/todo.js "></script>
        <!-- Custom js -->
        <script type="text/javascript" src="../../assets/pages/dashboard/custom-dashboard.min.js"></script>
        <script type="text/javascript" src="../../assets/js/script.js"></script>
        <script type="text/javascript " src="../../assets/js/SmoothScroll.js"></script>
        <script src="../../assets/js/pcoded.min.js"></script>
        <script src="../../assets/js/vartical-demo.js"></script>
        <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <!-- Required AdminPage Jquery -->
            <script>
                function cek_status(statusParam) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'aksi_cek_status.php', true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            //alert(xhr.responseText);
                            //alert(typeof xhr.responseText);
                            let result = JSON.parse(xhr.responseText);
                            switch (statusParam) {
                                case 'cek_ta':
                                    if (result['status'] === true) alert("Kamu udah ngambil TA!");
                                    else window.location.href = 'daftar_ta.php';
                                    break;
                                case 'cek_sempro':
                                    if (result['status'] === true && result['acc'] === true) alert("Kamu dah ngajuin Sempro dan dah di ACC");
                                    else if (result['status'] === true && result['acc'] === false) alert("Kamu dah ngajuin Sempro dan belum di ACC");
                                    else window.location.href = 'daftar_sempro.php';
                                    break;
                                case 'cek_sidang':
                                    if (result['status'] === true && result['acc'] === true) alert("Kamu dah ngajuin Sidang dan dah di ACC");
                                    else if (result['status'] === true && result['acc'] === false) alert("Kamu dah ngajuin Sidang dan belum di ACC");
                                    else window.location.href = 'daftar_sidang.php';
                                    break;
                            }
                        }
                    };
                    xhr.send('status_param='+statusParam);
                }
            </script>
</body>


</html>