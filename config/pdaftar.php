<?php
	include 'db_connect.php';
	if(!isset($_SESSION)){
		session_start();
	}else {}

	$nama = $_POST['nama_lengkap'];
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$query = "INSERT INTO tbl_login 
				VALUES(DEFAULT,'','".$user."','".$pass."',3)";
	$res = $connect->query($query);
	$query2 = "INSERT INTO tbl_personalia 
				VALUES(
					DEFAULT,NULL,'','".$nama."',NULL,'','',NULL,'',NULL,'',NULL,'','',''
			)";
	$res2 = $connect->query($query2);

	// if($res){
	header('Location: ../');	
	// }else{
	// 	echo "Test";
	// }


?>