<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_kategori="insert into t_kategori (id_kategori, nama)
	values('".$_POST['id_kategori']."',
			'".$_POST['nama']."')";
	$proses_input_kategori=mysql_query($query_input_kategori);
	if($proses_input_kategori){
		echo 'Input Data Berhasil';
	}else{
		echo mysql_error();
	}
}
?>
<body bgcolor="#FF8C00">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="tampil_kategori.php">Tampil Kategori</li></a>
		</ul>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategori"></td>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Home Menu Utama</li></a>
</ul>
