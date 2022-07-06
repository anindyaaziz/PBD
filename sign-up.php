<?php
  include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Webpage Title -->
        <title>TK AL_FALAH</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/logo.png">
    </head>

    <body>

                                                 <!-- Navigation -->
            <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div 
                    class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#pengumuman">pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#details">Details</a>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.php
                        ">Log in</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Sign Up</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="log-in.html">Log In</a></p>

                            <!-- Sign Up Form -->
                            <form action="regis.php" method="POST">
                                <div class="mb-4 form-floating">
                                    <input type="text" name="nik" class="form-control" id="floatingInput" placeholder="35151*******">
                                    <label for="floatingInput">NIK ORANG TUA</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" name="namao" class="form-control" id="floatingInput2" placeholder="nama panjang">
                                    <label for="floatingInput">NAMA ORANG TUA</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" name="pekerjaan" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">PEKERJAAN ORANG TUA</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" name="namas" class="form-control" id="floatingInput" placeholder="35151*******">
                                    <label for="floatingInput">NAMA SISWA</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <select class="form-control" name="jk" id="gender" name="gender"> 
                                    <label for="floatingInput">JENIS KELAMIN</label>
                                    <option value="0">Laki-Laki</option>
                                    <option value="1">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="date" name="tanggal" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">TANGGAL LAHIR</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" name="alamat" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">ALAMAT</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" name="anakke" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">ANAKKE</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">PASSWORD</label>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>
                                </div>
                                   <button type="submit" name="register" class="form-control-submit-button">  submit </button>
                            </form>

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->

   <!-- Footer -->


   <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">Hubunngi kita : <a href="mailto:contact@site.com"><strong>alfalahsidoarjo@gmail.com</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->

   
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>