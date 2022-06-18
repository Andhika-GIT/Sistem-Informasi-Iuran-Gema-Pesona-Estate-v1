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
    
    include("../koneksi.php");
    include('../fungsi/hutang/tampil_hutang.php');

    if(isset($_SESSION['sukses'])) {
      $pesan = $_SESSION['sukses']; 
    } 
     
?>

<head>
    <title>Sistem Informasi Iuran</title>
    <link rel="shortcut icon" type="image/png" href="asset/logo/logo.png">

    <!-- code untuk datatables-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
</head>

<body>
    <div class="container">
        <h2>Daftar Iuran Tunggakan</h2>
        <div class="data-tables datatable-dark">

            <table class="table table-striped table-bordered" id="tb">
                <thead>
                    <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Kode Tagihan</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>

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
            
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#tb').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'excel', 'pdf',
                    {
                        extend: 'print',
                        title: '<div style="text-align:center;"><h1>Daftar Iuran Tunggakan</h1><br></div>',

                    }
                    // {
                    //     extend: 'pdfHtml5',
                    //     pageSize: 'LEGAL',
                    //     exportOptions: {
                    //         columns: [0,1,2,3,4,5,6,7,8]
                    //     },
                    //     customize : function(doc) {
                    //         doc.content[1].table.widths = [ '5%', '28%', '10%', '10%', '10%', '7%', '15%','15%','15%'];
                    //     }
                    // }  
                ],
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>