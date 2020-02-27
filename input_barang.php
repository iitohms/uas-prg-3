<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_barang="insert into t_barang (id_barang, nama, kategori_id, satuan_id)
	values('".$_POST['id_barang']."',
			'".$_POST['nama']."',
			'".$_POST['kategori_id']."',
			'".$_POST['satuan_id']."')";
	$proses_input_barang=mysql_query($query_input_barang);
	if($proses_input_barang){
		echo 'Input Data Berhasil ';
	}else{
		echo mysql_error();
	}
}
?>
<body bgcolor="#FFF8DC">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="tampil_barang.php">Tampil Barang</li></a>
		</ul>
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="satuan_id"></td>
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
