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

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Admin - APSI</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle  " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!-- <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Tugas Akhir</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Pengajuan:</h6>
          <a class="dropdown-item" href="index.php">Tugas Akhir</a>
          <a class="dropdown-item" href="pages/data_sempro.php">Seminar Proposal</a>
          <a class="dropdown-item" href="pages/data_sidangakhir.php">Sidang Akhir</a>
          <div class="dropdown-divider"></div>
          <!-- <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/akun_mhs.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Akun Mahasiswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/akun_dsn.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Akun Dosen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftarkan Akun!</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Tugas Akhir Mahasiswa</li>          
        </ol>
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
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Tugas Akhir</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php">
                <span class="float-left">Cek</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3"></div>          

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Seminar Proposal</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="pages/data_sempro.php">
                <span class="float-left">Cek</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Sidang Akhir</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="pages/data_sidangakhir.php">
                <span class="float-left">Cek</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>  

        </div>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Tugas Akhir Mahasiswa</div>           

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Tema</th>
                    <th>Pembimbing</th>   
                    <th>Action</th>                 
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Tema</th>
                    <th>Pembimbing</th> 
                    <th>Action</th>                      
                  </tr>
                </tfoot>
                <tbody>
                <?php
                $query = "SELECT nim, mahasiswa.nama, judul, tema, dosen.nama, id_ta from ta, mahasiswa, dosen WHERE id_mhs=nim AND id_dosbing=nidn;";
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                while ($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td class="text-table"><?php echo $row[0]; ?></td>
                        <td class="text-table"><?php echo $row[1]; ?></td>
                        <td class="text-table"><?php echo $row[2]; ?></td>
                        <td class="text-table"><?php echo $row[3]; ?></td>
                        <td class="text-table"><?php echo $row[4]; ?></td>

                        <!-- Button -->
                        <td><a href='edit_ta.php?nim=<?php echo $row['nim']; ?>&nama_mhs=<?php echo $row[1]; ?>&id_ta=<?php echo $row['id_ta']; ?>&tema=<?php echo $row['tema']; ?>&nama_dosbing=<?php echo $row[4]; ?>&judul=<?php echo $row['judul']?>' class='btn btn-success'>
                                <span class='glyphicon glyphicon-edit'></span>Edit</button></a>
                            <a href='aksi_edit_ta.php?id_ta=<?php echo $row['id_ta']; ?>&aksi=delete' class='btn btn-danger'>
                                <span class='glyphicon glyphicon-remove-sign'></span>Delete</button></a></td>
                    </tr>
                    <?php
                }
                ?>
                  <!-- Data Table -->
                </tbody>
              </table>
            </div>
          </div>         
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © APSI S1 Teknik Industri</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
