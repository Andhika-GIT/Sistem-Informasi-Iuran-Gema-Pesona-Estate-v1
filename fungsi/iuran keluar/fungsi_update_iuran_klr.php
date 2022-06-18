<?php 
    include('koneksi.php');

       // mengambil data dari table iuran keluar berdasarkan ID dari kode iuran keluar

    $kode_iuran = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($kode_iuran)) {
        die('Invalid parameter ID');
    } 
 
    $iuran= null;

    $getData = "SELECT * FROM tb_iuran_keluar WHERE kode_iuran_keluar = ? limit 1";
    $exekusi = $conn->prepare($getData);
    $exekusi -> bind_param("s",$kode_iuran);
    $exekusi ->execute();

    $result = $exekusi->get_result();
    while ($row = $result->fetch_assoc()) {
        $iuran = $row;
    }

    //validasi form
	$nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
	$kode_iuran = isset($_REQUEST['kode_iuran']) ? $_REQUEST['kode_iuran'] : '';
	$tanggal= isset($_REQUEST['tanggal']) ? $_REQUEST['tanggal'] : '';
	$keterangan = isset($_REQUEST['keterangan']) ? $_REQUEST['keterangan'] : '';
	$metode_bayar = isset($_REQUEST['metode_bayar']) ? $_REQUEST['metode_bayar'] : '';
	$jumlah = isset($_REQUEST['jumlah']) ? $_REQUEST['jumlah'] : '';
    $submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

    $error = [];

     // pengecekan jika tombol submit dipencet
     if (!empty($submit)) {

     // jika sudah tidak ada error
     if(!count($error) > 0) {
        $update = "UPDATE tb_iuran_keluar SET  kode_iuran_keluar='{$kode_iuran}', 
                                        nama='{$nama}',                                      
                                        tanggal='{$tanggal}', 
                                        keterangan='{$keterangan}',
                                        metode_bayar='{$metode_bayar}',
                                        jumlah='{$jumlah}'                                      
                   WHERE kode_iuran_keluar='{$kode_iuran}'" ;


            if($conn->query($update) === true) {
                session_start();
                $_SESSION['sukses'] = "Data berhasil diupdate";
                header('location: iurankeluar.php');
            }

            else{
            $error[] = "Error : ". $update . $conn->error;
            }

    } 
}       