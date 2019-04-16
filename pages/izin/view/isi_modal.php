<?php
	include '../../../config/db_connect.php';
	$ID = $_POST['id'];
	$query = "SELECT * FROM tbl_izin WHERE id_izin = $ID";

	$ex = mysqli_query($connect, $query);
	
	foreach ($ex as $key) {
		?>
			<input type="text" id="ID" value="<?php echo $key['id_izin']?>" style="display: none;" />
			<p>Apakah anda yakin akan menghapus data <?php echo $key['jenis_izin']; ?></p>
		<?php
	}
