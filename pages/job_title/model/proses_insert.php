<?php
    include '../../../config/db_connect.php';
    $kd = $_POST['kode'];
    $job = $_POST['job'];

    $ex = mysqli_query($connect, "INSERT INTO tbl_job_title VALUES(DEFAULT,'".$kd."','".$job."')");