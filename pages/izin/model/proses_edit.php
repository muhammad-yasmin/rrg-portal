<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];
    $jizin = $_POST['jenis_izin'];
    $status = $_POST['status'];
    $mhari = $_POST['maks_hari'];
    $ex = mysqli_query($connect, "UPDATE tbl_izin SET jenis_izin='".$jizin."', status='".$status."', maks_hari='".$mhari."' WHERE id_izin=$ID");