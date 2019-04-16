<?php 
    include '../../../config/db_connect.php';
    $ID = $_POST['id'];
    $ex = mysqli_query($connect, "SELECT * FROM tbl_pendidikan WHERE id_pendidikan = $ID");

    $array = mysqli_fetch_array($ex);
    echo $array['nama_pendidikan'];