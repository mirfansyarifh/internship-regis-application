<?php
session_start();
include '../../../koneksi.php';
if(empty($_SESSION["user_id"]) || $_SESSION['role'] != "mahasiswa") {
    $_SESSION["errorMessage"] = "Login dulu woi";
    header('Location: ../../');
}
$nim = $_SESSION['nim'];
$nama = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mahasiswa</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Halo Mr/Mrs. <?php echo $nama; ?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Status Mahasiswa</a>
          </li>
         
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Mr/MRS. <?php echo $nama; ?></h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Status Akademik</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <center><h2>Tugas Akhir</h2></center>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <center><h2>Seminar Proposal</h2></center>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <i<center><h2>Sidang Akhir</h2></center>
          </div>
        </div>        

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  
  <!-- Contact Section -->
  
  <!-- Footer -->
  
  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Universitas Diponegoro</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tugas Akhir</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image di ubah jadi tabel-->
               <!-- Inverse table card start -->
               <div class="card-block table-border-style">
                  <div class="table-responsive">
                      <table class="table table-inverse">
                          <thead>
                          <tr>
                              <th>ID TA</th>
                              <th>Judul</th>
                              <th>Tema</th>
                              <th>Nama Dosen Pembimbing</th>
                              <th>NIDN</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $query = "SELECT id_ta, tema, judul, dosen.nama, dosen.nidn from ta INNER JOIN dosen on id_mhs='$nim' and dosen.nidn=ta.id_dosbing";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                          while ($row = mysqli_fetch_array($result))
                          {
                              ?>
                              <tr>
                                  <td class="text-table"><?php echo $row['id_ta']; ?></td>
                                  <td class="text-table"><?php echo $row['judul']; ?></td>
                                  <td class="text-table"><?php echo $row['tema']; ?></td>
                                  <td class="text-table"><?php echo $row[3]; ?></td>
                                  <td class="text-table"><?php echo $row[4]; ?></td>

                                  <!-- Button -->
                                  <!--<td><a href='aksi_status_ta.php?id=<?php /*echo $row['id_dosen']; */?>' class='btn btn-success'>
                                          <span class='glyphicon glyphicon-edit'></span>Approve</button></a>
                                      <a href='aksi_status_ta.php?id=<?php /*echo $row['id_dosen']; */?>' class='btn btn-danger'>
                                          <span class='glyphicon glyphicon-remove-sign'></span>Delete</button></a></td>-->
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          
          <!-- Inverse table card start -->
                <!-- Portfolio Modal - Text -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Seminar Proposal</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image di ubah jadi tabel-->
                <!-- Inverse table card start -->
                <div class="card-block table-border-style">
                  <div class="table-responsive">
                      <table class="table table-inverse">
                          <thead>
                              <tr>
                                  <th>Judul</th>
                                  <th>NIDN</th>
                                  <th>Tanggal</th>
                                  <th>Ruang</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                          $query = "SELECT ta.id_dosbing, datetime, ruang, acc_status, judul from ta INNER JOIN jadwal on id_mhs='$nim' and id_ta=id_jadwal and jenis_jadwal='sempro';";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                          while ($row = mysqli_fetch_array($result))
                          {
                              ?>
                              <tr>
                                  <td class="text-table"><?php echo $row['judul']; ?></td>
                                  <td class="text-table"><?php echo $row['id_dosbing']; ?></td>
                                  <td class="text-table"><?php echo $row['datetime']; ?></td>
                                  <td class="text-table"><?php echo $row['ruang']; ?></td>
                                  <td class="text-table"><?php echo $row['acc_status']; ?></td>

                                  <!-- Button --><!--
                                  <td><a href='aksi_status_sempro.php?idx=<?php /*echo $row['idx']; */?>&aksi=approve' class='btn btn-success'>
                                          <span class='glyphicon glyphicon-edit'></span>Approve</button></a>
                                      <a href='aksi_status_sempro.php?idx=<?php /*echo $row['idx']; */?>&aksi=decline' class='btn btn-danger'>
                                          <span class='glyphicon glyphicon-remove-sign'></span>Decline</button></a></td>-->
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
                <!-- Portfolio Modal - Text -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Sidang Tugas Akhir</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image di ubah jadi tabel-->
                <!-- Inverse table card start -->
                <div class="card-block table-border-style">
                  <div class="table-responsive">
                      <table class="table table-inverse">
                          <thead>
                              <tr>
                                  <th>Judul</th>
                                  <th>NIDN</th>
                                  <th>Tanggal</th>
                                  <th>Ruang</th>
                                  <th>Status</th>
                                  <th>Nilai</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                          $query = "select ta.judul, nim, nama, ruang, datetime, acc_status, nilai, ta.id_dosuji from ta, mahasiswa, jadwal where jadwal.jenis_jadwal='sidang' and ta.id_mhs='$nim' and mahasiswa.nim='$nim' and ta.id_ta=jadwal.id_jadwal ";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                          while ($row = mysqli_fetch_array($result))
                          {
                              ?>
                              <tr>
                                  <td class="text-table"><?php echo $row['judul']; ?></td>
                                  <td class="text-table"><?php echo $row['id_dosuji']; ?></td>
                                  <td class="text-table"><?php echo $row['datetime']; ?></td>
                                  <td class="text-table"><?php echo $row['ruang']; ?></td>
                                  <td class="text-table"><?php echo $row['acc_status']; ?></td>
                                  <td class="text-table"><?php echo $row['nilai']; ?></td>

                                  <!-- Button --><!--
                                  <td><a href='aksi_status_sempro.php?idx=<?php /*echo $row['idx']; */?>&aksi=approve' class='btn btn-success'>
                                          <span class='glyphicon glyphicon-edit'></span>Approve</button></a>
                                      <a href='aksi_status_sempro.php?idx=<?php /*echo $row['idx']; */?>&aksi=decline' class='btn btn-danger'>
                                          <span class='glyphicon glyphicon-remove-sign'></span>Decline</button></a></td>-->
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
                <!-- Portfolio Modal - Text -->
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
