<?php
session_start();

//validasi jika username dan password benar
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if (!isset($_SESSION['login'])) {
  //melakukan pengalihan
  header("location:index.php");
  exit;
}

include("koneksi.php");
include('fungsi/admin/tampil_admin.php');

if (isset($_SESSION['sukses'])) {
  $pesan = $_SESSION['sukses'];
}

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

  <!-- include dari asset -->
  <link rel="stylesheet" href="asset/dataTables/datatables.min.css">

  <!-- Material Design Bootstrap -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->
  <!-- Include Style -->
  <?php include 'src/style.php' ?>
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
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
            <!-- <div class="col-sm-6">
            <a href="halamantambahpenduduk.php" class="btn btn-primary float-right"><i class="fas fa-plus"> Tambah Data</i></a>
          </div>/.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9 mt-5 pt-5">
            <div class="row z-depth-3 shadow-lg">
              <div class="col-sm-4 rounded-left" style="background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
                           background: linear-gradient(to right, #ee5a6f, #f29263);">
                <div class="card-block text-center text-white mt-5">
                  <div class="profile_picture"><img src="foto_admin/<?php echo $admin['pp_admin'] ?>" class="img-circle border-left border-right border-secondary " alt="" width="170"></td>
                  </div>
                  <h2 class="font-weight-bold mt-5"><?php echo $admin["nama_admin"] ?></h2>
                  <p>Admin</p>
                </div>
              </div>
              <div class="col-sm-8 bg-white rounded-right">
                <h3 class="mt-3 text-center">Info</h3>
                <hr class="bg-primary mt-0 w-25">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>
                        <p class="font-weight-bold">Nama</p>
                      </label>
                      <input type="text" class="form-control" value="<?php echo $admin["nama_admin"] ?>">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>
                        <p class="font-weight-bold">Email</p>
                      </label>
                      <input type="email" class="form-control" value="<?php echo $admin["email_admin"] ?>">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>
                        <p class="font-weight-bold">No</p>
                      </label>
                      <input type="text" class="form-control" value="<?php echo $admin["no_admin"] ?>">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>
                        <p class="font-weight-bold">Username</p>
                      </label>
                      <input type="text" class="form-control" value="<?php echo $admin["username_admin"] ?>">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>
                        <p class="font-weight-bold">Password</p>
                      </label>
                      <input type="text" class="form-control" value="<?php echo $admin["password_admin"] ?>">
                    </div>
                  </div>
                  <!-- </div>
                    		<h4 class="mt-3">Projects</h4>
                    		<hr class="bg-primary">
                   		<div class="row"> -->
                </div>
                <!-- <hr class="bg-primary"> -->
                <div class="card-footer d-flex justify-content-center mt-4">
                  <a class="btn btn-primary" href="edit_admin.php?id=<?php echo $admin['id'] ?>">EDIT
                    DATA</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- include dari asset -->
  <script src="asset/dataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tb').DataTable({
        "language": {
          "decimal": "",
          "emptyTable": "Data kosong",
          "info": "Menampilkan _START_ sampai _END_ dari total _TOTAL_ data",
          "infoEmpty": "Showing 0 to 0 of 0 entries",
          "infoFiltered": "(filtered from _MAX_ total entries)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Tampilkan _MENU_ data",
          "loadingRecords": "Loading...",
          "processing": "Processing...",
          "search": "Search:",
          "zeroRecords": "No matching records found",
          "paginate": {
            "first": "First",
            "last": "Last",
            "next": "->",
            "previous": "<-"
          },
          "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
          }

        }
      });
    });
  </script>
</body>

</html>