<?php 
    include('../../koneksi.php');

    // mengambil data dari table iuran masuk berdasarkan ID dari kode iuran masuk

    $kode_iuran = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($kode_iuran)) {
        die('Invalid parameter ID');
    } 
 
    $iuran= null;

    $delete = "DELETE FROM tb_iuran_masuk WHERE kode_iuran_masuk = ? limit 1";
    $eksekusi = $conn->prepare($delete);
    $eksekusi-> bind_param("s",$kode_iuran);
    $eksekusi ->execute();

    if($eksekusi->affected_rows > 0) {
        session_start();
        $_SESSION['sukses'] = 'Data Berhasil dihapus';
        header("location: ../../iuranmasuk.php");
        echo "
					<script>
					alert('data berhasil dihapus!)';
					</script>
				";
    }

?>  