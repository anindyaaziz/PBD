<?php
  include_once('koneksi.php');
  $query_jenis_pembayaran = "SELECT * FROM jenis_pembayaran" ;
  $table_jenis_pembayaran = $mysqli_query($db, $query_jenis_pembayaran);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK AL-FALAH</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="shortcut icon" href="assets/images/log.png" type="image/x-icon">
</head>


<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">

                <div class="sidebar-header">
                    <img src="assets/images/anen.png" alt="" srcset="">
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item">
                            <a href="Dashboard.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                                                                <!-- side bar   -->

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="credit-card" width="20"></i>
                                <span>pembayaran</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="bayarspp.php">Pembayaran SPP</a>
                                </li>

                                <li>
                                    <a href="bayarup.php">Pembayaran Uang Pangkal</a>
                                </li>

                                <li>
                                     <a href="riwayat.php"> Riwayat Pemabayaran</a>
                                </li>

                            </ul>

                        </li>



                        <li class='sidebar-title'>PENUGASAN</li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                                <span>PRAKARYA</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="form-element-input.html">Mewarnai</a>
                                </li>

                                <li>
                                    <a href="form-element-input-group.html">Menyanyi</a>
                                </li>

                                <li>
                                    <a href="form-element-select.html">Menghitung</a>
                                </li>

                                <li>
                                    <a href="form-element-radio.html">Membaca</a>
                                </li>

                                <li>
                                    <a href="form-element-checkbox.html">Kolase</a>
                                </li>

                                <li>
                                    <a href="form-element-textarea.html">Olahraga</a>
                                </li>

                            </ul>

                        </li>



                        <li class='sidebar-title'>Bantuan</li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="alert-circle" width="20"></i>
                                <span>Errors</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="error-403.html">403</a>
                                </li>

                                <li>
                                    <a href="error-404.html">404</a>
                                </li>

                                <li>
                                    <a href="error-500.html">500</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

    <div id="main">

            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">

                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Anin </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

      <div class="main-content container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Tabel pembayaran</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tabel pembayaran</li>
                </ol>
              </nav>
            </div>
          </div>

        </div>
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>no_bayar</th>
                        <th>noinduk_siswa</th>
                        <th>tanggal bayar</th>
                        <th>jumlah bayar</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach($table_pembayaran as $data_pembayaran):
                      ?>
                      <tr>
                        <td class="text-bold-500"><?php echo $data_pembayaran ['no_bayar']; ?></td>
                        <td><?php echo $data_pembayaran ['noinduk_siswa']; ?></td>
                        <td class="text-bold-500"><?php echo $data_pembayaran ['tgl_bayar']; ?></td>
                        <td class="text-bold-500"><?php echo $data_pembayaran ['jumlah_bayar']; ?></td>
                        <td class="text-bold-500"><a href="" class="btn btn-small btn-warning">detail</a></td>
                      </tr>
                    </tbody>
                    <?php 
                     endforeach
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="assets/js/feather-icons/feather.min.js"></script>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>