<?php 
  session_start();

//validasi jika username dan password benar
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
 if ( !isset($_SESSION['login']) ) 
    {
    //melakukan pengalihan
    header("location:index.php");
    exit;
    } 
    
    include("koneksi.php");
    include('fungsi/hutang/tampil_hutang.php');

    if(isset($_SESSION['sukses'])) {
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

  <!-- Include Style -->
  <?php include 'src/style.php'?>
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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-10 card-title">
                      <h3 class=" ">Iuran Hutang</h3>
                      <a type="button" class=" btn btn-success mr-1" href="export/hutang.php" target="_blank">
                        <i class="fas fa-file-export"></i> Ekspor/Cetak Data</i></a>
                      <a type="button" class=" btn btn-primary" href="add_hutang.php">
                        <i class="fas fa-plus"> Tambah Data</i></a>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="alert" class="row <?php echo empty($pesan) ? 'd-none' : ''?> ">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $pesan;
                               if(isset($_SESSION['sukses'])) { // jika session username ada
                                unset($_SESSION['sukses']); //maka session sukses akan dihapus jika reload
                              } 
                      ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>

                  <table class="table table-striped table-bordered" id="tb">
                    <thead>
                      <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Kode Tagihan</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <!-- <th>Foto Ktp</th> -->
                        <th width="150px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(count($hutang) !=0) {
                  foreach($hutang as $p =>$hutang )
                  { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $hutang["kode_tagihan"] ?></td>
                        <td><?php echo $hutang["keterangan"] ?></td>
                        <td><?php echo $hutang["jumlah"] ?></td>
                        <td align="center">
                          <div class="btn-group">
                            <a class="btn btn-success btn-sm"
                              href="edit_hutang.php?id=<?php echo $hutang['kode_tagihan'] ?>"><i
                                class="fas fa-pencil-alt"> EDIT</i></a>
                            <a class="btn btn-danger btn-sm ml-1"
                              href="fungsi/hutang/hapus_hutang.php?id=<?php echo $hutang['kode_tagihan'] ?>"
                              onclick=" return confirm('anda yakin ingin menghapus data ini?'); "><i
                                class="fas fa-trash"> HAPUS</i></a>
                          </div>
                        </td>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

                <!-- /.card -->

              </div>

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->



      <!-- Main Footer -->
      <?php include 'component/footer.php'?>
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
      $(document).ready(function () {
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