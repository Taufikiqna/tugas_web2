<?php

include 'koneksi.php';

if(isset($_GET['id'])) {

	$npm = $_GET['id'];
	$namafile = 'img_'.$npm.'.jpg';

	if(is_file("file/".$namafile)) {
		unlink("file/".$namafile);
	}

	$del = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE npm='$npm'");
	if($del) {
		echo 'Data Berhasil Dihapus! ';
		echo '<a href="index.php">Kembali</a>';
	}else{
		echo 'Data Gagal Dihapus! ';
		echo '<a href="index.php">Kembali</a>';
	}
}
?>