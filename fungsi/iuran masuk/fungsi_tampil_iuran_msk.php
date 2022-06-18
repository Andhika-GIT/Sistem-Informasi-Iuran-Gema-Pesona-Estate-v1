<?php
 
  $iuran= [];
  $limit = 6 ; // batas jumlah data yang ditampilkan pada satu 1 halaman, yaitu satu halaman terdiri dari 6 data
  $page = (isset($_GET['page'])) ? $_GET['page'] : 1 ; // jika page ada , variabel page akan dimulai dari page yang aktif, jika page kosong, maka mulai dari satu
  $limitStart = ($page - 1) * $limit; // sebagai pemulai data dari halaman
                                      // jika halaman 1 , maka 1-1 = 0, lalu dikali limit(6)
                                      // hasil adalah 0, maka pada halaman 1, data dimulai dari data ke 1 sampai data ke 6

  $data = mysqli_query($conn, "SELECT * FROM tb_iuran_masuk");
  while($rows = mysqli_fetch_assoc($data)) {
    $iuran[] = $rows;
  }

  $jumlahData = mysqli_num_rows($data); // menghitung jumlah keseluruhan data
  $jumlahPage = ceil($jumlahData / $limit); // untuk menghitung jumlah halaman
                                            // ceil digunakan untuk membulatkan bilangan koma ke atas (jika 2,1 maka jadi 3)

  $no = $limitStart + 1;
  ?>