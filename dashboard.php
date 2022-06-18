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

  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
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
      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Cards</h1>
        </div>

        <div class="row">

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Earnings (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
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
  <!-- <script src="asset/js/sb-admin-2.min.js"></script> -->
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