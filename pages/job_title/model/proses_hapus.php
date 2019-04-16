<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];
    $query = mysqli_query($connect, "DELETE FROM tbl_job_title WHERE id_job_title = $ID");