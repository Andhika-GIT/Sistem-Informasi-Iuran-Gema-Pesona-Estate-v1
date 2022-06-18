<?php
include('koneksi.php');

// mengambil data dari table admin  berdasarkan ID dari id_admin

$id_admin = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

if (empty($id_admin)) {
    die('Invalid parameter ID');
}

$admin = null;

$getData = "SELECT * FROM tb_admin WHERE id  = ? limit 1";
$eksekusi = $conn->prepare($getData);
$eksekusi->bind_param("i", $id_admin);
$eksekusi->execute();

$result = $eksekusi->get_result();
while ($row = $result->fetch_assoc()) {
    $admin = $row;
}

//validasi form
$nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
$no = isset($_REQUEST['no']) ? $_REQUEST['no'] : '';
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';
$error = [];

// pengecekan jika tombol submit dipencet
if (!empty($submit)) {

    // standar upload foto
    $ekstensi = array("jpg", "png", "gif", "svg");
    $foto_admin = $_FILES['poto']['name'];
    // mengubah string menjadi array 
    $x = explode('.', $foto_admin);
    //  mengambil ekstensi foto (jpg,png, dan lainnya) setelah titik
    $teks_ekstensi = strtolower(end($x));
    $ukuran = $_FILES['poto']['size'];
    $file_tmp = $_FILES['poto']['tmp_name'];

    // pengecekan sebelum upload foto
    if ($foto_admin === "") {
        $foto_admin = $admin['pp_admin'];
    } else {
        if (in_array($teks_ekstensi, $ekstensi) === true) {
            if ($ukuran < 500000) {
                move_uploaded_file($file_tmp, 'foto_admin/' . $foto_admin);
            } else {
                $error[] = "Ukuran terlalu besar!";
            }
        } else {
            $error[] = "File tidak didukung!";
        }
    }

    // jika sudah tidak ada error
    if (!count($error) > 0) {
        $update = "UPDATE tb_admin SET  pp_admin='{$foto_admin}', 
                                            nama_admin='{$nama}',
                                            email_admin='{$email}',
                                            no_admin='{$no}',
                                            username_admin='{$username}',
                                            password_admin='{$password}'
                                    
                       WHERE  id_admin='{$id_admin}'";


        if ($conn->query($update) === true) {
            session_start();
            $_SESSION['sukses'] = "Data berhasil diupdate";
            header('location: admin.php');
        } else {
            $error[] = "Error : " . $update . $conn->error;
        }
    }
}
