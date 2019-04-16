<?php
    include '../../../config/db_connect.php';
?>
<div class="">
    <form class="form-horizontal" method="post">
        <div class="form-group row">
            <label class="form-control-label">Tahun</label>
            <div class="col-md-4">
                <select name="select_tahun" id="select_tahun" class="form-control">
                <option>-- Pilih Tahun --</option>
                <?php
                    $query2 = mysqli_query($connect, "SELECT * FROM tbl_tahun");
                    foreach ($query2 as $key) {
                        ?>
                            <option value="<?php echo $key['tahun']; ?>"><?php echo $key['tahun']; ?></option> 
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" name="submit" value="Submit">
        </div>
        
    </form>
</div>
<table class="table table-hover dataTable w-full" data-plugin="dataTable" id="tabelnya">
    <thead>
        <td>Bulan / Tahun</td>
        <td>Jumlah Hari Aktif</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php
            if (isset($_POST['submit'])){
                $tahun = $_POST['select_tahun'];

                $query = "SELECT tbl_hari_aktif.id_hari_aktif, 
                tbl_hari_aktif.bulan, 
                tbl_hari_aktif.jumlah_hari_aktif, 
                tbl_tahun.tahun 
                FROM tbl_hari_aktif INNER JOIN tbl_tahun
                ON tbl_hari_aktif.tahun = tbl_tahun.id_tahun
                WHERE tbl_tahun.tahun = '".$tahun."'";
                $exec = mysqli_query($connect, $query);

                while($array = mysqli_fetch_array($exec)){
                    ?>
                        <tr>
                            <td><?php echo $array['bulan']; ?> / <?php echo $array['tahun']; ?></td>
                            <td><?php echo $array['jumlah_hari_aktif']; ?></td>
                            <td>
                                <!-- <a class="btn btn-sm btn-pure" onclick="btnPreview(<?php //echo $array['id_pendidikan']; ?>);" title="Lihat"><i class="blue-600 icon md-eye"></i></a> -->
                                <a class="btn btn-sm btn-pure" onclick="btnEdit(<?php echo $array['id_hari_aktif']; ?>);" title="Edit"><i class="green-600 icon md-edit"></i></a>
                                <a class="btn btn-sm btn-pure" onclick="btnHapus(<?php echo $array['id_hari_aktif']; ?>);" data-toggle="modal" data-target="#modalHapus" title="Hapus"><i class="red-600 icon md-delete"></i></a>
                            </td>
                        </tr>
                    <?php
                }
            }
            ?>
            
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tabelnya").dataTable();
    });

    function tahunnya(){
        $("#id_tahun").val($("#select_tahun").val());
    }
</script>