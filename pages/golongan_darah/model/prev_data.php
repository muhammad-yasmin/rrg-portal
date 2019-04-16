<?php 
    include '../../../config/db_connect.php';
    $ID = $_POST['id'];
    $ex = mysqli_query($connect, "SELECT * FROM tbl_gol_darah WHERE id_gol_darah = $ID");

    $array = mysqli_fetch_array($ex);
    echo $array['golongan_darah'];