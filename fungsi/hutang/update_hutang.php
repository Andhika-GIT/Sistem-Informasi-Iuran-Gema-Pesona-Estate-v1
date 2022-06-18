<?php 
    include('koneksi.php');

       // mengambil data dari table iuran tunggakan berdasarkan ID dari kode_tagihan

    $kode_hutang = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

    if(empty($kode_hutang)) {
        die('Invalid parameter ID');
    } 
 
    $hutang= null;

    $getData = "SELECT * FROM iuran_tunggakan WHERE kode_tagihan  = ? limit 1";
    $eksekusi = $conn->prepare($getData);
    $eksekusi -> bind_param("s",$kode_hutang);
    $eksekusi ->execute();

    $result = $eksekusi->get_result();
    while ($row = $result->fetch_assoc()) {
        $hutang = $row;
    }

    //validasi form
	$kode_hutang = isset($_REQUEST['kode_hutang']) ? $_REQUEST['kode_hutang'] : '';
	$keterangan = isset($_REQUEST['keterangan']) ? $_REQUEST['keterangan'] : '';
	$jumlah = isset($_REQUEST['jumlah']) ? $_REQUEST['jumlah'] : '';
    $submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

    $error = [];

      // pengecekan jika tombol submit dipencet
      if (!empty($submit)) {

        // jika sudah tidak ada error
        if(!count($error) > 0) {
           $update = "UPDATE iuran_tunggakan SET  kode_tagihan='{$kode_hutang}', 
                                                 keterangan='{$keterangan}',
                                                 jumlah='{$jumlah}'                                      
                      WHERE  kode_tagihan='{$kode_hutang}'" ;
   
   
               if($conn->query($update) === true) {
                   session_start();
                   $_SESSION['sukses'] = "Data berhasil diupdate";
                   header('location: hutang.php');
               }
   
               else{
               $error[] = "Error : ". $update . $conn->error;
               }
   
       } 
   }   