<?php
include('koneksi.php');
//INNER JOIN dengan t_satuan dan t_kategori
$query_barang="select brg.id_barang, brg.nama_barang, ktg.id_kategory, ktg.nama_kategory, 
				stu.id_satuan, stu.nama_satuan from t_barang as brg 
				inner join t_kategory as ktg on brg.kategory_id=ktg.id_kategory
				inner join t_satuan as stu on brg.satuan_id=stu.id_satuan";
$tampil_barang = mysqli_query($home, $query_barang);
if($tampil_barang ===FALSE){
	die(mysqli_error($home));
}
?>
<body bgcolor="#8F00FF">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_barang.php">Input Barang</li></a>
		</ul>
	<tr>
		<td>Id Barang</td>
		<td>Nama Barang</td>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_barang)){ ?>

	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['id_kategory']; ?></td>
		<td><?php echo $data['nama_kategory']; ?></td>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Home Menu Utama</li></a>
</ul>