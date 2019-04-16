<?php
    include '../../../config/db_connect.php';
    $ID = $_POST['ID'];
    $query = mysqli_query($connect, "SELECT * FROM tbl_izin WHERE id_izin = $ID");
    foreach($query as $key){
        ?>
        <form autocomplete="off">
            <div class="row">
                <input type="text" class="form-control" id="ID" name="ID" value="<?php echo $key['id_izin']; ?>" autocomplete="off" style="display:none;">
                <div class="form-group form-material col-md-6">
                    <label class="form-control-label" for="jenis_izin">Jenis Izin</label>
                    <input type="text" class="form-control" id="jenis_izin" name="jenis_izin" value="<?php echo $key['jenis_izin']; ?>" autocomplete="off">
                </div>
                <div class="form-group form-material col-md-6">
                    <label class="form-control-label" for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $key['status']; ?>" autocomplete="off">
                </div>
                <div class="form-group form-material col-md-6">
                    <label class="form-control-label" for="maks_hari">Maks Hari</label>
                    <input type="text" class="form-control" id="maks_hari" name="maks_hari" value="<?php echo $key['maks_hari']; ?>" autocomplete="off">
                </div>
            </div>
        </form>
        <?php
    }
?>
