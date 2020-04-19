<?php 
session_start();
include '../include/config.php';


$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db,"SELECT  *  from user JOIN role on role.role_id = user.role_id where  user_id= '$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	$nama = $data['first_name'];

	// cek jika user login sebagai admin
	if($data['role_name']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:../view/Admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role_name']=="Manager"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "Manager";
		$_SESSION['first_name']=$nama;
		// alihkan ke halaman dashboard pegawai
		header("location:../view/Manager.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['role_name']=="Kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "Kasir";
		$_SESSION['first_name']= $nama;
		// alihkan ke halaman dashboard pengurus
		header("location:../view/Kasir.php");
 
	}else if($data['role_name']=="Pembeli"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "Pembeli";
		$_SESSION['first_name']= $nama;
		// alihkan ke halaman dashboard pengurus
		header("location:../view/Pembeli.php");
 
	}else {
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
?>
