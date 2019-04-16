<?php
    include '../../../config/db_connect.php';
    $query = "SELECT * FROM tbl_izin";
    $exec = mysqli_query($connect, $query);
?>
<table class="table table-hover dataTable w-full" data-plugin="dataTable" id="tabelnya">
    <thead>
        <td>No.</td>
        <td>Jenis Izin</td>
        <td>Status</td>
        <td>Maks Hari</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php 
        $no = 0;
            while($array = mysqli_fetch_array($exec)){
                ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $array['jenis_izin']; ?></td>
                        <td><?php echo $array['status']; ?></td>
                        <td><?php echo $array['maks_hari']; ?></td>
                        <td>
                            <!-- <a class="btn btn-sm btn-pure" onclick="btnPreview(<?php echo $array['id_pendidikan']; ?>);" title="Lihat"><i class="blue-600 icon md-eye"></i></a> -->
                            <a class="btn btn-sm btn-pure" onclick="btnEdit(<?php echo $array['id_izin']; ?>);" title="Edit"><i class="green-600 icon md-edit"></i></a>
							<a class="btn btn-sm btn-pure" onclick="btnHapus(<?php echo $array['id_izin']; ?>);" data-toggle="modal" data-target="#modalHapus" title="Hapus"><i class="red-600 icon md-delete"></i></a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tabelnya").dataTable();
    });
</script>