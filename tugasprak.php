<?php
session_start();
  include_once('koneksi.php');
  $query_prakarya = "SELECT * FROM tugas_prakarya " ;
  $table_prakarya = mysqli_query($db, $query_prakarya);
  // $user = mysqli_query($db, "SELECT * FROM prakarya WHERE noinduk_siswa = '".$_SESSION['user_id']."'");
  // $u =mysqli_num_rows($user);
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

      <div class="main-content container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Tabel Pengumpulan</h3>
            </div>
          </div>

          <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Tugas</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Status</th>
                      <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deadline</th>
                      <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Upload</th>
            
                    </tr>
                  </thead>
                 <tbody>

                    <?php
                    
                     foreach ($table_prakarya as $data_prakarya) : 
                     $id = $data_prakarya['id_tugasprak']; 
                     $cek = mysqli_query($db, "SELECT * FROM prakarya WHERE id_jenisprak = $id AND noinduk_siswa ='".$_SESSION['username']."'");
                     $user = mysqli_query($db, "SELECT * FROM prakarya WHERE id_tugasprak = '".$data_prakarya['id_tugasprak']."'");
                    ?>
                    <tr>

                    
                      <td class="align-middle text-center text-sm">
                      <span class="text-s font-weight-bold mb-0">
                      <?php echo $data_prakarya['id_tugasprak'];  ?> 
                     </span>
                    </td>

                      <td class="align-middle text-center text-sm">
                        <span class="text-s font-weight-bold mb-0">
                        <?php echo $data_prakarya['nama_tugasprak'];  ?> 
                        </span>
                      </td>


                      <td class="align-middle text-center">
                        <span class="text-secondary text-s font-weight-bold">
                        <?php if(mysqli_num_rows($user)>0){
                                echo "SUDAH MEMNGUMPULKAN" ;  
                        }else{
                          echo "BELUM MENGUMPULKAN";
                        }  ?> 
                        </span>
                      </td>

                      <td class="align-middle text-center text-sm">
                        <span class="text-s font-weight-bold mb-0">
                        <?php echo $data_prakarya['end_tugas'];  ?> 
                        </span>
                      </td>
                      
                    

                      <td class="align-middle text-center">
                      <?php if(mysqli_num_rows($user)>0){
                        ?>
                               <a  class="btn" style="background-color:grey;color:white;">SUBMITED</a>
                       <?php
                              }else{
                          ?>
                          <a href="tugas.php?id=<?php echo $data_prakarya['id_tugasprak']; ?>" class="btn" style="background-color: green;color:white;">SUBMIT</a>
                       
                       <?php
                        }  ?> 
                   
                      </td>
              
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


  <script src="assets/js/feather-icons/feather.min.js"></script>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>