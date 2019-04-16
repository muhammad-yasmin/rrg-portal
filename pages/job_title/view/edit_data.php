<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];
    $query = mysqli_query($connect, "SELECT * FROM tbl_job_title WHERE id_job_title = $ID");
    foreach($query as $key){
        ?>
        <form autocomplete="off">
            <div class="row">
                <input type="text" class="form-control" id="ID" name="ID" value="<?php echo $key['id_job_title']; ?>" autocomplete="off" style="display:none;">
                <div class="form-group form-material col-md-6">
                    <label class="form-control-label" for="kode_job">Kode Job</label>
                    <input type="text" class="form-control" id="kode_job" name="kode_job" value="<?php echo $key['kode_job']; ?>" autocomplete="off">
                </div>
                <div class="form-group form-material col-md-6">
                    <label class="form-control-label" for="inputBasicLastName">Job Title</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $key['job_title']; ?>" autocomplete="off">
                </div>
            </div>
        </form>
        <?php
    }
?>
