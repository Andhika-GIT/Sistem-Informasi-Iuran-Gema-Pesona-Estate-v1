<?php
//validasi jika username dan password benar
session_start();
if (!isset($_SESSION['login'])) {
    //melakukan pengalihan
    header("location:index.php");
    exit;
}
include('fungsi/data penduduk/fungsiupdatependuduk.php');

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Iuran</title>
    <link rel="shortcut icon" type="image/png" href="asset/logo/logo.png">

    <!-- Include Style -->
    <?php include 'src/style.php' ?>
    <!-- End Include Style -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Include Navbar Header -->
        <?php include 'component/navbarComponent.php'; ?>

        <!-- Include Sidebar Menu -->
        <?php include 'component/sidebar.php'; ?>

        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Penduduk</li>
                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header bg-green">
                                    <h3 class="card-title">Edit Data Penduduk</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <!-- Error Message -->
                                        <!-- <div id="alert" class="row ">
                                            <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?php echo $penduduk["nama_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group ">
                                                    <label>Agama</label>
                                                    <select class="form-control" name="agama">
                                                        <option><?php echo $penduduk["agama"] ?></option><br>
                                                        <option disabled="disabled"><br></option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Khatolik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan blok rumah" name="alamat" value="<?php echo $penduduk["alamat_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>RT</label>
                                                    <select class="form-control" name="rt">
                                                        <option><?php echo $penduduk["rt_penduduk"] ?></option><br>
                                                        <option disabled="disabled"><br></option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>no Tlp</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No Tlp" name="tlp" value="<?php echo $penduduk["no_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>No Nik</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No Nik" name="nik" value="<?php echo $penduduk["nik_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>No KK</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No KK" name="kk" value="<?php echo $penduduk["kk_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12  ">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($penduduk['jenis_kelamin'] == 'Laki-Laki') ? 'checked' : '' ?>>
                                                        <label class="form-check-label">
                                                            Laki-Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($penduduk['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
                                                        <label class="form-check-label">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-12  ">    
                                                <div class="form-group">
                                                    <label>Foto Ktp</label><br>
                                                    <img id="foto" src="images/< echo $penduduk["ktp_penduduk"] ?>" alt="" width = "150">
                                                    <input id="thumbnail" type="file" class="form-control-file" name="poto">
                                                </div>
                                            </div>     -->
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <a onclick=" return confirm('anda yakin ingin kembali'); " href="datapenduduk.php" class="btn btn-warning mr-2"> Kembali</a>
                                        <input type="submit" name="submit" class="btn btn-info" value="update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <?php include 'component/footer.php' ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script>
        function gambar(input) {
            if (input.files && input.files[0]) {
                var read = new FileReader();

                read.onload = function(x) {
                    $('#foto').attr('src', x.target.result);
                }

                read.readAsDataURL(input.files[0]);
            }
        }

        $('#thumbnail').change(function() {
            gambar(this);
        })
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>