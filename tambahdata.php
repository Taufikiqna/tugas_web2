<!DOCTYPE html>
	<html>
	<head>
		<title>Tambah Data</title>
	</head>
	<body>
		<h1>Tanbah Data Mahasiswa</h1>
		<br/>
		<a href="index.php">Data Mahasiswa</a>
		<br/><br/>
		<form action="prosestambah.php" method="post" enctype="multipart/form-data">
			<table width="400">
				<tr>
					<td>NPM</td>
					<td><input type="text" name="npm"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" value=L name="jk">Laki-laki
						<input type="radio" value=P name="jk">Perempuan
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<Select name=jurusan>
						<option value=SI>Sistem Informasi</option>
						<option value=SIA>Sistem Informasi Akuntansi</option>
						<option value=TI>Teknik Informatika</option>
					</Select>
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" name="file"></td>
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
	</body>
	</html>