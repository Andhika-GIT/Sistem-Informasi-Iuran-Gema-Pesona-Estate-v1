<?php
	include('koneksi.php');
	//validasi form
	$nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
	$kode_iuran = isset($_REQUEST['kode_iuran']) ? $_REQUEST['kode_iuran'] : '';
	$tanggal= isset($_REQUEST['tanggal']) ? $_REQUEST['tanggal'] : '';
	$keterangan = isset($_REQUEST['keterangan']) ? $_REQUEST['keterangan'] : '';
	$metode_bayar = isset($_REQUEST['metode_bayar']) ? $_REQUEST['metode_bayar'] : '';
	$jumlah = isset($_REQUEST['jumlah']) ? $_REQUEST['jumlah'] : '';
    $submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

	$error = [];

 	if (!empty($submit)) {
		 
		if(!count($error)) {
			$tambah = "INSERT INTO tb_iuran_keluar VALUES (
				'{$kode_iuran}','{$nama}','{$tanggal}','{$keterangan}','{$metode_bayar}','{$jumlah}'				
			)";

			if($conn->query($tambah) === true) {
				session_start();
				$_SESSION['sukses'] = "Data berhasil disimpan";
				header("location: iurankeluar.php");
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