<?php
    include '../../../config/db_connect.php';
    $query = "SELECT * FROM tbl_gol_darah";
    $exec = mysqli_query($connect, $query);
?>
<table class="table table-hover dataTable w-full" data-plugin="dataTable" id="tabelnya">
    <thead>
        <td>No.</td>
        <td>Golongan Darah</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php 
        $no = 0;
            while($array = mysqli_fetch_array($exec)){
                ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $array['golongan_darah']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-pure" onclick="btnPreview(<?php echo $array['id_gol_darah']; ?>);" title="Lihat"><i class="blue-600 icon md-eye"></i></a>
                            <!-- <a class="btn btn-sm btn-pure" onclick="btnEdit();" title="Edit"><i class="red-600 icon md-edit"></i></a> -->
							<!-- <a class="btn btn-sm btn-pure" onclick="btnHapus();" title="Hapus"><i class="red-600 icon md-delete"></i></a> -->
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