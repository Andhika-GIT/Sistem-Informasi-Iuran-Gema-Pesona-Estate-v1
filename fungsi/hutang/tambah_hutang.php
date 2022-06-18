<?php
	include('koneksi.php');
	//validasi form
	$kode_hutang = isset($_REQUEST['kode_hutang']) ? $_REQUEST['kode_hutang'] : '';
	$keterangan = isset($_REQUEST['keterangan']) ? $_REQUEST['keterangan'] : '';
	$jumlah = isset($_REQUEST['jumlah']) ? $_REQUEST['jumlah'] : '';
    $submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

	$error = [];

 	if (!empty($submit)) {
		 
		if(!count($error)) {
			$tambah = "INSERT INTO iuran_tunggakan VALUES (
				'{$kode_hutang}','{$keterangan}','{$jumlah}'				
			)";

			if($conn->query($tambah) === true) {
				session_start();
				$_SESSION['sukses'] = "Data berhasil disimpan";
				header("location: hutang.php");
				echo '
					<script>
					alert("data berhasil ditambahkan!");
					</script>
				';
			} else {
				$error[] = "Error : ". $tambah . $conn->error;
			}
		}
	 }
?> 