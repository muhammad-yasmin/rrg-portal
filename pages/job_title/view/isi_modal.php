<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['id'];
    $query = "SELECT * FROM tbl_job_title WHERE id_job_title = $ID";
    $ex = mysqli_query($connect, $query);
    foreach ($ex as $key){
        ?>
            <input type="text" id="ID" value="<?php echo $key['id_job_title']; ?>" style="display:none;" />
            <p>Apakah anda yakin akan menghapus data "<?php echo $key['job_title']; ?>" ? </p>
        <?php
    }