<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
<h1>Upload File</h1>
<?php
include 'koneksi.php';
if(isset($_POST['save'])){
	
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];

	$ekstensi_diperbolehkan = array('png','jpg');
	$photo = $_FILES['file']['name'];
	$x = explode('.',$photo);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$namafile = 'img_'.$npm.'.jpg';

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){
			move_uploaded_file($file_tmp, 'file/' .$namafile);
			$query = mysqli_query($koneksi,"insert into tb_mahasiswa(npm,nama,jenis_kelamin,jurusan,kelas,photo) values('$npm','$nama','$jk','$jurusan','$kelas','$namafile')");
			if($query){
				echo "<script>alert('Data Berhasil Di Simpan');window.location='index.php';</script>";
			}else{
				echo "<script>alert('Gagal Mengupload Gambar');window.location='index.php';</script>";
			   }
		}else{
			echo "<script>alert('Ukuran File Terlalu Besar');window.location='tambahdata.php';</script>";
		   }
		}else{
			echo "<script>alert('Ekstensi File Tidak Diperbolehkan');window.location='tambahdata.php';</script>";
	}
	
}
?>

</body>
</html>