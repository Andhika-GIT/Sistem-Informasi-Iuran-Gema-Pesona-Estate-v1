<?php 
    session_start();
    include('koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
		header("Location: index.php?pesan=Username harus di isi");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?pesan=Password harus di isi");
	    exit();
	}else{
		$sql = "SELECT * FROM tb_admin WHERE username_admin='$username' AND password_admin='$password' ";

		$result = mysqli_query($conn, $sql);
        // $cek = mysqli_num_rows($result);

		if ( mysqli_num_rows($result) === 1 ) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username_admin'] === $username && $row['password_admin'] === $password) {
                $_SESSION['nama'] = $row['nama_admin'];
				$_SESSION['gambar'] = $row['pp_admin'];
            	$_SESSION['login'] = true ;
            	header("Location: dashboard.php");
		        exit();
            }else{
				header("Location: index.php?pesan=Username atau password tidak benar");
		        exit();
			}
		}else{
			header("Location: index.php?pesan=Username atau password tidak benar");
	        exit();
		}
	}
	
// }else{
// 	header("Location: index.php");
// 	exit();
// }

?>