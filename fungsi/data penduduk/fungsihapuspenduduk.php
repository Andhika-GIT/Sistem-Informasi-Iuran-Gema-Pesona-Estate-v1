<?php 
    include('../../koneksi.php');

    $idpenduduk = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($idpenduduk)) {
        die('Invalid Parameter ID');

    }

    $delete = "DELETE FROM tb_penduduk WHERE id_penduduk = ? limit 1";
    $eksekusi = $conn->prepare($delete);
    $eksekusi->bind_param("i", $idpenduduk);
    $eksekusi->execute();

    if($eksekusi->affected_rows > 0) {
        session_start();
        $_SESSION['sukses'] = 'Data Berhasil dihapus';
        header("location: ../../datapenduduk.php");
        echo "
					<script>
					alert('data berhasil dihapus!)';
					</script>
				";
    }

?>    