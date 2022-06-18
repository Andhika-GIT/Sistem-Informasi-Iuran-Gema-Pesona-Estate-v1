<?php
//validasi jika username dan password benar
session_start();
if (!isset($_SESSION['login'])) {
  //melakukan pengalihan
  header("location:index.php");
  exit;
}
include('fungsi/admin/update_admin.php');

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
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/datepicker/css/bootstrap-datepicker.min.css">


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
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header bg-green">
                  <p class="text-center ">Edit Data Admin</p>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <!-- Error Message -->
                    <div id="alert" class="row <?php echo empty($error) ? 'd-none' : '' ?> ">
                      <div class="col-md-12">
                        <div class="alert alert-danger">
                          <ul>
                            <?php foreach ($error as $r) { ?>
                              <li><?php echo $r ?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>
                            <p class="font-weight-bold">Nama</p>
                          </label>
                          <input name="nama" type="text" class="form-control" value="<?php echo $admin["nama_admin"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>
                            <p class="font-weight-bold">Email</p>
                          </label>
                          <input name="email" type="email" class="form-control" value="<?php echo $admin["email_admin"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>
                            <p class="font-weight-bold">No</p>
                          </label>
                          <input name="no" type="text" class="form-control" value="<?php echo $admin["no_admin"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>
                            <p class="font-weight-bold">Username</p>
                          </label>
                          <input name="username" type="text" class="form-control" value="<?php echo $admin["username_admin"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>
                            <p class="font-weight-bold">Password</p>
                          </label>
                          <input name="password" type="text" class="form-control" value="<?php echo $admin["password_admin"] ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Upload Foto</label><br>
                          <img id="foto" src="images/<?php echo $admin["pp_admin"] ?>" alt="" width="200">
                          <input id="thumbnail" type="file" class="form-control-file" name="poto">
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a onclick=" return confirm('anda yakin ingin kembali'); " href="admin.php" class="btn btn-warning mr-2"> Kembali</a>
                    <input type="submit" name="submit" class="btn btn-primary" value="simpan"></input>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="asset/js/jquery-3.4.0.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- jQuery -->
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