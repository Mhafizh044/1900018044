<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>
<body>
	<?php 
	if(isset($_GET['Nama'])){
		if($_GET['Nama'] == "kosong"){
			echo "<h4 style='color:black'>Nama Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['NIM'])){
		if($_GET['NIM'] == "kosong"){
			echo "<h4 style='color:black'>NIM Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['jeniskelamin'])){
		if($_GET['jeniskelamin'] == "kosong"){
			echo "<h4 style='color:black'>Jenis Kelamin Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['Prodi'])){
		if($_GET['Prodi'] == "kosong"){
			echo "<h4 style='color:black'>Program Studi Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['Komentar'])){
		if($_GET['Komentar'] == "kosong"){
			echo "<h4 style='color:black'>No Comment !</h4>";
		}
	}
	?>
	<form action="validasi.php" method="post">
		<table border="1" cellpadding="0" cellspacing="0">
			<td>
				<p>Formulir Mahasiswa Teknik UAD</p>
				<pre>
<label>Nama         : </label><input type="text" name="Nama">
				</pre>
				<pre>
<label>NIM          : </label><input type="text" name="NIM">
				</pre>
				<pre>
<label>Jenis Kelamin: </label><label><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</label><label><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</label>
				</pre>
				<pre>
<label>Program Studi:</label><select name="Prodi">
						<option>Teknik Informatika</option>
						<option>Teknik Industri</option>
						<option>Teknik Kimia</option>
						<option>Teknologi Pangan</option>
					</select>
				</pre>
				<pre>
<label>Komentar</label>
<textarea name="Komentar">Silahkan masukan komentar</textarea>
				</pre>
				<input type="submit" value="Cek Validasi">
			</td>
		</table>
	</form>
</body>
</html>