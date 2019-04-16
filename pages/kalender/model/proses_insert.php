<?php
    include '../../../config/db_connect.php';
    $jizin = $_POST['jenis_izin'];
    $status = $_POST['status'];
    $mhari = $_POST['maks_hari'];


    $ex = mysqli_query($connect, "INSERT INTO tbl_izin VALUES(DEFAULT,'".$jizin."','".$status."','".$mhari."')");