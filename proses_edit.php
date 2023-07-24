<?php

include 'koneksi.php';

if(isset($_POST["npm"]) && !empty($_POST["npm"])) {

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

	if(empty($file_tmp)) {
		$update = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nama='$nama',jenis_kelamin='$jk',jurusan='$jurusan',kelas='$kelas' WHERE npm='$npm'")or die(mysqli_error());
		if($update) {
		echo "<script>alert('Data Berhasil Di Update');window.location='index.php';</script>";
			}else{
				echo "<script>alert('Update Gagal');window.location='index.php';</script>";
			   }
			}else{
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
					if($ukuran < 1044070){

						if(move_uploaded_file($filr_tmp, 'file/'.$namafile)) {
							$update = mysqlii_query($koneksi, "UPDATE tb_mahasiswa SET nama='$nama', jenis_kelamin='$jk', jurusan='$jurusan', kelas='$kelas', photo='$namafile' WHERE npm='$npm'")or die(mysqli_error());
							if($update){
								echo "<script>alert('Data Berhasil Di Update');window.location='index.php';</script>";
			                }else{
				                 echo "<script>alert('Update Gagal');window.location='index.php';</script>";
			                     }
							}else{
								echo "<script>alert('Gagal Mengupload Gambar');window.location='index.php';</script>";
			                     }
		                    }else{
			                	echo "<script>alert('Ukuran File Terlalu Besar');window.location='tambahdata.php';</script>";
		                      	 }
		                    }else{
			                 	echo "<script>alert('Ekstensi File Tidak Diperbolehkan');window.location='edit_datamahasiswa.php';</script>";
								 }
						
					}





}

?>