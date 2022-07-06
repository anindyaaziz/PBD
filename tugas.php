<?php
session_start();
  include_once('koneksi.php');
  $query_prakarya = "SELECT * FROM tugas_prakarya " ;
  $table_prakarya = mysqli_query($db, $query_prakarya);
  $user = mysqli_query($db, "SELECT * FROM siswa where noinduk_siswa = '".$_SESSION['user_id']."'");
	$u = mysqli_fetch_array($user);
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
  

            <?php
                $jenis       =  mysqli_fetch_array(mysqli_query($db, "SELECT * FROM tugas_prakarya WHERE id_tugasprak = '".$_GET['id']."'"));
                date_default_timezone_set("Asia/jakarta");
                $date        = date("Y-m-d");
                $deadline    = $jenis['end_tugas'];
                $time        = mysqli_query($db,"SELECT DATEDIFF('$deadline','$date') AS 'waktu' ");
                $row         = $time->fetch_assoc();
                $wkt         = $row['waktu'];
            ?>

                <div class="container-fluid py-1 px-5">
                  <h3 class="mb-3">pengumpulan tugas</h3>

                    <table class="table table-bordered bg-white">
                         <tr>
                             <th>NAMA TUGAS  </th>
                             <th><?= $jenis['nama_tugasprak'] ?></th>
                        </tr>
                        <tr>
                            <th>DESKRIPSI TUGAS</th>
                            <th>
                                <?php
                                    echo $jenis['deskripsi_tugasprak'];
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <th>TIME REMAINING</th>
                            <th>
                                <?php
                                    echo $wkt." days left ";
                                ?>
                            </th>
                        </tr>

                    </table>
                </div>


            <div class="container-fluid py-1 px-5">
                <div class="row col-md-6"> 
                    <form method="post" action="" enctype="multipart/form-data">  
                        <div class="form-group  mb-0">
                        <label for="exampleInputPassword1">Upload Tugas</label>
                        <input type="file" name="gambar"class="form-control">
                </div>
                        <br></br>
                        <button type="submit" name="tugas" value="tugas"class="btn" style="background-color: green;color:white;">Upload</button>
                    </form>
            </div>


            <?php
                if(isset($_POST['tugas'])){
                $idt            = $_GET['id'];
                $noinduk        = $_SESSION['username'];
                $gambar         = $_FILES['gambar']['name'];
                $lokasi         = $_FILES['gambar']['tmp_name'];
                date_default_timezone_set("Asia/jakarta");
                $tanggal        = date("Y-m-d"); 
                move_uploaded_file($lokasi, './assets/images/tugas/'.$gambar);

                if($gambar == null){
                  echo "<script> alert(' mohon lengkapi tugas dulu ya :)'); </script>";
                }else{
                $prakarya =mysqli_query($db, "INSERT INTO prakarya(id_tugasprak, noinduk_siswa, tgl_prakarya, filepath_prakarya ) VALUES 
                                                    ('$idt','$noinduk', '$tanggal','$gambar')");

               echo "<script>location='tugasprak.php';</script>";
              }
              }
           ?>



  <script src="assets/js/feather-icons/feather.min.js"></script>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>