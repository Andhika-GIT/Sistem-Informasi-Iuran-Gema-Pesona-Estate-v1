<?php
	include('koneksi.php');
	//validasi form
	$nama_penduduk = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
	$agama= isset($_REQUEST['agama']) ? $_REQUEST['agama'] : '';
	$jenis_kelamin = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin'] : '';
	$alamat_penduduk = isset($_REQUEST['alamat']) ? $_REQUEST['alamat'] : '';
	$rt_penduduk = isset($_REQUEST['rt']) ? $_REQUEST['rt'] : '';
	$no_penduduk = isset($_REQUEST['tlp']) ? $_REQUEST['tlp'] : '';
	$nik_penduduk = isset($_REQUEST['nik']) ? $_REQUEST['nik'] : '';
	$kk_penduduk = isset($_REQUEST['kk']) ? $_REQUEST['kk'] : '';
	$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

	$error = [];

 	if (!empty($submit)) {
		 
		if(!count($error)) {
			$tambah = "INSERT INTO tb_penduduk VALUES (
				null,'{$nama_penduduk}','{$agama}','{$jenis_kelamin}','{$alamat_penduduk}','{$rt_penduduk}','{$no_penduduk}','{$nik_penduduk}','{$kk_penduduk}'					
			)";

			if($conn->query($tambah) === true) {
				session_start();
				$_SESSION['sukses'] = "Data berhasil disimpan";
				header("location: datapenduduk.php");
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
 