<?php
    //menghubungkan file ini dengan database
    require_once('koneksi.php');

    // Menngambil data dari table database
    $data = 'SELECT * FROM tb_siswa';
    $result = $con->query($data);
    $rows = $result->num_rows;

    while ($rows = $result->fetch_assoc()) {
        $students[] = $rows;
        //mengecek koneksi database
        // var_dump($siswa);
    }

    session_start();
    if (isset($_SESSION['pesan'])) {
        $notif = $_SESSION['pesan'];
        session_unset();
        session_destroy();
    }

?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Siswa</h3>
                <a href="tambah_siswa.php" class="btn btn-sm btn-outline btn-outline-primary float-right">
                    <i class="fas fa-plus"></i> Tambah Siswa
                </a>
                <!-- if Success -->
                    <div id="alert_success" class="row <?php echo empty($notif)?"d-none":"" ?>">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <?php echo $notif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- end if Success -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <table class="table table-bordered">
                  <thead>
                    <tr class="text-center">
                      <th style="width: 10px">No</th>
                      <th>Photo</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($students as $no => $siswa ) { ?>
                    <tr>
                      <td><?php echo $no+1 ?></td>
                      <td><img src="image/<?php echo $siswa['poto_siswa'] ?>"  alt=""></td>
                      <td><?php echo $siswa['nama_siswa'] ?></td>
                      <td><?php echo $siswa['kelas_siswa'] ?></td>
                      <td><?php echo $siswa['jenis_kelamin'] ?></td>
                      <td><?php echo $siswa['alamat'] ?></td>
                      <td>
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm" href=""><i class="fas fa-eye"></i></a>
                                <a class="btn btn-success btn-sm" href="editsiswa.php?id=<?php echo $siswa['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
