<?php
include('koneksi.php');
//Laporan transaksi barang yang di kelompokkan per kategory
$laporan_transaksi="select ktg.id_kategory, ktg.nama_kategory, brg.nama_barang, qty, harga, qty*harga as total 
				from t_transaksi as trx inner join t_barang as brg on trx.id_barang=brg.id_barang
				inner join t_kategory as ktg on brg.kategory_id=ktg.id_kategory				
				inner join t_satuan as stn on brg.satuan_id=stn.id_satuan";

$tampil_laptransaksi = mysqli_query($home, $laporan_transaksi);
if($tampil_laptransaksi ===FALSE){
	die(mysqli_error($home));
}
?>
<body bgcolor="#96B400">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_transaksi.php">Input Transaksi</li></a>
		</ul>
	<tr>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total</td>	
	</tr>
<?php while($data = mysqli_fetch_array($tampil_laptransaksi)){ ?>

	<tr>
		<td><?php echo $data['id_kategory']; ?></td>
		<td><?php echo $data['nama_kategory']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">Home Menu Utama</li></a>
</ul>