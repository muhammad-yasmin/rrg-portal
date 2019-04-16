<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];
    $kode = $_POST['kode'];
    $job = $_POST['job'];
    $ex = mysqli_query($connect, "UPDATE tbl_job_title SET kode_job='".$kode."', job_title='".$job."' WHERE id_job_title=$ID");