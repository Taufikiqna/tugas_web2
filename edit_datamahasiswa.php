<!DOCTYPE html>
	<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<h2>Data Mahasiswa</h2>
		<br/>
		<a href="index.php">Kembali</a>
		<br/><br/>
		<h3>Edit Data Mahasiswa</h3>

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from tb_mahasiswa where npm='$id'");
		while($d = mysqli_fetch_array($data)) {
			?>
			<form method="post" action="proses_edit.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>NPM</td>
						<td>
							<input type="text" name="npm" value="<?php echo $d['npm']; ?>" readonly>
						</td>
					</tr>

					<tr>
						<td>Nama</td>
						<td>
							<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
						</td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td>
						<td>
							<input type="radio" name="jk" value="L" <?php if($d['jenis_kelamin']=='L') echo 'chacked'?>>Laki-laki
							<input type="radio" name="jk" value="P" <?php if($d['jenis_kelamin']=='P') echo 'chacked'?>>Perempuan
						</td>
					</tr>

					<tr>
						<td>Jurusan</td>
						<td>
							<Select name=jurusan>
								<option value="SI" <?php if($d['jurusan']=='SI') echo 'selected="selected"'; ?> >Sistem Informasi</option>
								<option value="TI" <?php if($d['jurusan']=='TI') echo 'selected="selected"'; ?> >Teknologi Informatika</option>
								<option value="SIA" <?php if($d['jurusan']=='SIA') echo 'selected="selected"'; ?> >Sistem Informasi Akuntansi</option>
							</Select>
						</td>
					</tr>

					<tr>
						<td>Kelas</td>
						<td>
							<input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
						</td>
					</tr>

					<tr>
						<td>Photo</td>
						<td>
							<input type="file" name="file"> <img src="file/<?php echo $d['photo']; ?>" style="width: 100px; float: left; margin-bottom: 5px;">
							<br/><i style="float: left; font-size: 11px; color: blue">Abaikan jika tidak mengubah photo</i>
						</td>
					</tr>

					<tr>
						<td></td>
						<td>
							<br/><br/>
							<input name="save" type="submit" value="Simpan">
						<input name="batal" type="reset" value="Batal" />
					</td>
				</tr>
			</table>
		</form>
		<?php
		}
		?>

	</body>
	</html>