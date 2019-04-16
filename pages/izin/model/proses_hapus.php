<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];

    $query = mysqli_query($connect, "DELETE FROM tbl_izin WHERE id_izin = $ID");