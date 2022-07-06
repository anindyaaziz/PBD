<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include ('koneksi.php');
	
// }

//menangkap data yang dikirim dari form 
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$cek = mysqli_query($db, "SELECT * FROM siswa WHERE noinduk_siswa = '" . $username . "' AND password = '" . $password . "'");
	if (mysqli_num_rows($cek) > 0) {
		$user = mysqli_fetch_assoc($cek);

		$_SESSION['user_logged'] = true;
		$_SESSION['user_id'] = $user['Id'];
		$_SESSION['username'] = $username;
		$_SESSION['user_name'] = $user['username'];

		header('location: Dashboard.php');
		
	} else {
		echo '<p style="color: red">Username atau Password salah!</p>';
	}
}
?>