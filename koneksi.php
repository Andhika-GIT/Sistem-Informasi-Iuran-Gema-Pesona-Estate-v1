<?php 
    $DB_HOST = "127.0.0.1";
    $DB_DATABASE = "db_iuran";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";

    $conn = new mysqli($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);

    if($conn->connect_error) {
        die("Connection Gagal " . $conn->connect_error);
    } 


?>