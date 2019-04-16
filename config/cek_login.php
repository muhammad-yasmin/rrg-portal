<?php
    include 'db_connect.php';
    if (!isset($_SESSION)) {
		session_start();
	} else {}

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM tbl_login WHERE username = '$user' AND password = '$pass'";
    $res = $connect->query($query);
	if ($res->num_rows == 1) {
        $rows = $res->fetch_assoc();
        $_SESSION['id_peg'] = $rows['id_pegawai'];
        $_SESSION['user'] = $rows['username'];
		header('Location: ../pages/');
	} else {
		echo "Maaf, anda salah memasukkan usernmae";
	}
?>