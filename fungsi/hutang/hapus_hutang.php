<?php 
    include('../../koneksi.php');

       // mengambil data dari table iuran tunggakan berdasarkan ID dari kode_tagihan

    $kode_hutang = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($kode_hutang)) {
        die('Invalid parameter ID');
    } 
 
    $hutang= null;

    $delete = "DELETE FROM iuran_tunggakan WHERE kode_tagihan = ? limit 1";
    $eksekusi = $conn->prepare( $delete);
    $eksekusi -> bind_param("s",$kode_hutang);
    $eksekusi ->execute();

    if($eksekusi->affected_rows > 0) {
        session_start();
        $_SESSION['sukses'] = 'Data Berhasil dihapus';
        header("location: ../../hutang.php");
        echo "
					<script>
					alert('data berhasil dihapus!)';
					</script>
				";
    }