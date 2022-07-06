
<?php
session_start();
  include_once('koneksi.php');
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

                <div class="nav-item active">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>

                         <li class="nav-item active ">
                            <a href="Dashboard.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                         </li>

                        <li class="nav-item active ">
                            <a href="bayarspp.php" class='sidebar-link'>
                                <i data-feather="credit-card" width="20"></i>
                                <span>pembayaran</span>
                            </a>
                        </li>

                        <li class="nav-item active ">
                            <a href="tugasprak.php" class='sidebar-link'>
                                <i data-feather="book-open" width="20"></i>
                                <span>penugasan prakarya</span>
                            </a>
                        </li> 
                        <li class="nav-item active ">
                            <a href="raport.php" class='sidebar-link'>
                                <i data-feather="book-open" width="20"></i>
                                <span>raport</span>
                            </a>
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
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user ">
                                <div class="avatar me-1" >
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">
                                   <?php
                                        if (isset($_SESSION['username'])) {
                                         $username = $_SESSION['username'];

                                         $query = mysqli_query($db, "SELECT nama_siswa FROM siswa WHERE noinduk_siswa = '$username'"); 
                                         foreach ($query as $cf) {}
                                             if($query->num_rows > 0) {
                                              echo "Hai, " . $cf['nama_siswa'];
                                            }
                                        }
                                      ?>
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
 <!-- Page content -->
      
    <div class="container-fluid mt--6">
      <div class="row mt--5">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-upgrade">
            <div class="card-header text-center border-bottom-0">              
              <h4 class="card-title">Nilai Bulanan</h4>
              <p class="card-category"></p></div>
            <div class="card-body">
              <div class="table-responsive table-upgrade">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kriteria Nilai Bulanan</th>
                      <th>Nilai Bulanan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no =$_SESSION['username'];
                      $query = mysqli_query($db, "CALL nilaibulanan($no)");

                      while($nilaibulanan = mysqli_fetch_array($query)){
                          echo "<tr>";

                          echo "<td>".$nilaibulanan['nama_kriteria_bulanan']."</td>";
                          echo "<td>".$nilaibulanan['nilai_bulanan']."</td>";

                          echo "</tr>";
                      }
                      ?>
                  </tbody>
                </table>
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