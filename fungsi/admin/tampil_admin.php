<?php 

$admin;

$data = mysqli_query($conn, "SELECT * FROM tb_admin");
while($rows = mysqli_fetch_assoc($data)) {
  $admin = $rows;
}

?>