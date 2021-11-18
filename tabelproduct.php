<!DOCTYPE html>
<html>
<head>
	<title>Data Product dalam tabel</title>
	<link rel="stylesheet" href="/LOGIN/css/bootstrap.css">
</head> 
<body>
<div class="bg-dark">
	<h1 class="text-center text-white">DATA PRODUCT</h1>
	<br/>
	<h3><a href="tambahbrg.php" style="text-align: center; text-decoration: none;">+TAMBAH PRODUCT</a></h3>
	<h3><a href="../LOGIN/admin/index.php"  style="text-align: center; text-decoration: none;"><-Kembali ke Navigation Center</a>
	</h3>
	<br/>
	<br/>
</div>
	<table class="table table-bordered table-hover">
	<thead class="thead-dark">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>GAMBAR</th>
			<th>NAMA</th>
			<th>HARGA</th>
			<th>DESKRIPSI</th>
            <th>TERJUAL</th>
            <th>STOCK</th>
            <th>OPSI</th>
		</tr>
	</thead>
		<?php 
		include 'koneksi1.php';
		$no = 1;
		$data = mysqli_query($tambah,"select * from product");
		while($b = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $b['id']?></td>
				<td><?php echo $b['Gambar']; ?></td>
				<td><?php echo $b['nama']; ?></td>
				<td><?php echo $b['harga']; ?></td>
                <td><?php echo $b['deskripsi']; ?></td>
                <td><?php echo $b['terjual']; ?></td>
                <td><?php echo $b['stock']; ?></td>
				<td>
					<a href="editproduct.php?id=<?php echo $b['id']; ?>">EDIT</a>
					<a href="hapusproduct.php?id=<?php echo $b['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>