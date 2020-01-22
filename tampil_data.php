	<<?php 
	//memanggil file koneksi
	require_once('koneksi.php');
	//include('koneksi.php');


	//ambil data daridatabase
	$query="SELECT * FROM tb_pengurus";
	$data=mysqli_query($conn,$query);



	 ?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Data Pengurus</title>

			<link rel="stylesheet" type="text/css" href="style2.css">
			<link rel="stylesheet"  href="bootstrap.min.css">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />	
		
		</head>
		<body background="3.png">

	<section class="table" >
	<h1 align="center" class="yoi2">Data Pengurus</h1>

		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>alamat</th>
				<th>gender</th>
				<th>gaji</th>
				<th>keterangan</th>
			</tr>

		<?php
			while ($row=mysqli_fetch_assoc($data)) { 	
		?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['alamat'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['gaji'];?></td>
				<td>
			<a href="edit_data.php?id=<?php echo $row['id']; ?>">"Edit"</a>
			<a href="hapus_data.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin nih mau dihapus??')">Delete
				</td>
				
			</tr>
				<?php
				    }
				?>
		</table>

	</section>

		<div class="yoi" align="center">
				<h1 >Input Data</h1>
	
		<form method="post" action="simpan_data.php">
				
				<table border="0" align="center">
					<tr>
						<td>Masukkan Id</td>
						<td></td>
						<td><input type="text" name="id" required="required" ></td>
					</tr>
					<tr>
						<td>Masukkan Nama</td>
						<td></td>
						<td><input type="text" name="nama" required="required"></td>
					</tr>
					<tr>
						<td>Masukkan Alamat</td>
						<td></td>
						<td><input type="text" name="alamat" required="required"></td>
					</tr>
					<tr>
						<td>Masukkan Gender</td>
						<td></td>
						<td><input type="radio" value="L" name="gender" >laki-laki
							<input type="radio" value="P" name="gender">Perempuan</td>
					</tr>
					<tr>
						<td>Masukkan Gaji</td>
						<td></td>
						<td><input type="number" name="gaji"></td>
					</tr>
					<tr align="center">
						<td><button type="submit" class="btn btn-outline-primary" ><i class="material-icons ">turned_in_not</i>Save</button></td>
						<td></td>
						<td><button type="reset" class="btn btn-outline-danger"><i class="material-icons ">delete</i>Batal</button>
						</td>
					</tr>
		</form>

			</div>
		</table>
	</form>
</div>


		

	</body>
	</html>