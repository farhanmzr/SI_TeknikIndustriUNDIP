<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai mahasiswa
	if ($data['level'] == "mahasiswa") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard mahasiswa
		header("location:mahasiswa.php");

		// cek jika user login sebagai akademik
	} else if ($data['level'] == "koorkp") {
		// buat session login dan username
        $_SESSION['username'] = $username;
       
		$_SESSION['level'] = "koorkp";
		// alihkan ke halaman dashboard akademik
		header("location:koorkp_mahasiswa.php");

		// cek jika user login sebagai dosen
	} else if ($data['level'] == "dosen") {
		// buat session login dan username
        $_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		// alihkan ke halaman dashboard dosen
		header("location:dosen.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
