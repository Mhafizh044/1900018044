<?php 
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$jeniskelamin = $_POST['jeniskelamin'];
$prodi = $_POST['Prodi'];
$komentar = $_POST['Komentar'];

if($nama == ""){
	header("location:formvalidasi.php?nama=kosong");
}else{
	echo "Nama : ". $nama;
}

if($nim == ""){
	header("location:formvalidasi.php?nama=kosong");
}else{
	echo "<br>NIM : ". $nim;
}

if($jeniskelamin == ""){
	header("location:formvalidasi.php?nama=kosong");
}else{
	echo "<br>Jenis Kelamin : ". $jeniskelamin;
}

if($prodi == ""){
	header("location:formvalidasi.php?nama=kosong");
}else{
	echo "<br>Program Studi : ". $prodi;
}

if($komentar == ""){
	header("location:formvalidasi.php?nama=kosong");
}else{
	echo "<br>Komentar : ". $komentar;
}
?>