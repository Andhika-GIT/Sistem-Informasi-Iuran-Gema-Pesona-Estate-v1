<?php
session_start();

//validasi jika username dan password benar
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if (!isset($_SESSION['login'])) {
  //melakukan pengalihan
  header("location:index.php");
  exit;
}
$page = "datapenduduk.php";
include("koneksi.php");
include('fungsi/data penduduk/fungsitampilpenduduk.php');

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
                      <h3 class=" ">Daftar Penduduk</h3>
                      <a type="button" class=" btn btn-success mr-1" href="export/penduduk.php" target="_blank">
                        <i class="fas fa-file-export"></i> Ekspor/Cetak Data</i></a>
                      <a type="button" class=" btn btn-primary" href="tambahpenduduk.php">
                        <i class="fas fa-plus"> Tambah Data</i></a>
                    </div>
                    <!-- modal tombol tambah data    -->
                    <!-- <php include('tambahpenduduk.php') ?> -->
                    <!-- <form action="" class="form-inline d-flex justify-content-end" method="get">
                        <input type="text" class="form-control" placeholder="search.." name="cari">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit"><i class="fas fa-search"></i></button>
                        <a type="button" class="btn btn-success ml-3" value="kembali" href="datapenduduk.php">Reset</a>
                    </form> -->
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- <div id="alert" class="row <php echo empty($pesan) ? 'd-none' : ''?> ">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <php echo $pesan;
                               if(isset($_SESSION['sukses'])) { // jika session username ada
                                unset($_SESSION['sukses']); //maka session sukses akan dihapus jika reload
                              } 
                            ?>
                        </div>
                      </div>
                  </div> -->
                  <div id="alert" class="row <?php echo empty($pesan) ? 'd-none' : '' ?> ">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $pesan;
                      if (isset($_SESSION['sukses'])) { // jika session username ada
                        unset($_SESSION['sukses']); //maka session sukses akan dihapus jika reload
                      }
                      ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>


                  <table class="table table-striped table-bordered" id="tbpenduduk">
                    <thead>
                      <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>RT</th>
                        <th>No tlp</th>
                        <th>No Nik</th>
                        <th>No Kk</th>
                        <!-- <th>Foto Ktp</th> -->
                        <th width="150px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (count($penduduk) != 0) {
                        foreach ($penduduk as $p => $penduduk) { ?>


                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $penduduk["nama_penduduk"] ?></td>
                            <td><?php echo $penduduk["agama"] ?></td>
                            <td class="align-items-center"><?php echo $penduduk["jenis_kelamin"] ?></td>
                            <td><?php echo $penduduk["alamat_penduduk"] ?></td>
                            <td><?php echo $penduduk["rt_penduduk"] ?></td>
                            <td><?php echo $penduduk["no_penduduk"] ?></td>
                            <td><?php echo $penduduk["nik_penduduk"] ?></td>
                            <td><?php echo $penduduk["kk_penduduk"] ?></td>
                            <!-- <td class="text-center"><img src="images/< echo $penduduk['ktp_penduduk']?>" alt = "" width="100"></td> -->
                            <td align="center">
                              <div class="btn-group">
                                <!-- <a class="btn btn-info btn-sm" href="detailpenduduk.php?id="><i class="fas fa-eye"></i></a> -->
                                <a class="btn btn-success btn-sm" href="editpenduduk.php?id=<?php echo $penduduk['id_penduduk'] ?>"><i class="fas fa-pencil-alt"> EDIT</i></a>
                                <a class="btn btn-danger btn-sm ml-1" href="fungsi/data penduduk/fungsihapuspenduduk.php?id=<?php echo $penduduk['id_penduduk'] ?>" onclick=" return confirm('anda yakin ingin menghapus data ini?'); "><i class="fas fa-trash"> HAPUS</i></a>
                              </div>
                            </td>
                          </tr>
                      <?php }
                      } ?>


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
        $('#tbpenduduk').DataTable({
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