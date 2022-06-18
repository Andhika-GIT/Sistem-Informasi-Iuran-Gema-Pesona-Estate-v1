<?php 
    include('koneksi.php');

       // mengambil data dari table penduduk berdasarkan ID

    $idpenduduk = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($idpenduduk)) {
        die('Invalid parameter ID');
    } 
 
    $penduduk= null;

    $getData = "SELECT * FROM tb_penduduk WHERE id_penduduk = ? limit 1";
    $exekusi = $conn->prepare($getData);
    $exekusi -> bind_param("i",$idpenduduk);
    $exekusi ->execute();

    $result = $exekusi->get_result();
    while ($row = $result->fetch_assoc()) {
        $penduduk = $row;
    }

    // end

    // proses update data

    // pengecekan form pada form edit penduduk
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

    // pengecekan jika tombol submit dipencet
    if (!empty($submit)) {

        if(!count($error)) {
            $update = "UPDATE tb_penduduk SET nama_penduduk='{$nama_penduduk}',
                                            agama='{$agama}', 
                                            jenis_kelamin='{$jenis_kelamin}', 
                                            alamat_penduduk='{$alamat_penduduk}',
                                            rt_penduduk='{$rt_penduduk}',
                                            no_penduduk='{$no_penduduk}',
                                            nik_penduduk='{$nik_penduduk}',
                                            kk_penduduk='{$kk_penduduk}'                                       
                       WHERE id_penduduk='{$idpenduduk}'" ;


                if($conn->query($update) === true) {
                    session_start();
				    $_SESSION['sukses'] = "Data berhasil diupdate";
                    header('location: datapenduduk.php');
                }

                else{
                $error[] = "Error : ". $update . $conn->error;
                }

        }



    }    




 ?> 