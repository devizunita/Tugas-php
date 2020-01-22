	<<?php 
	//memanggil file koneksi
	require_once('koneksi.php');
	//include('koneksi.php');


	//ambil data daridatabase
	$query="SELECT tb_divisi.kode_divisi, tb_divisi.nama_divisi, tb_divisi.tunjangan, tb_pengurus.nama FROM tb_divisi,tb_pengurus WHERE tb_divisi.id=tb_pengurus.id";
	$data=mysqli_query($conn,$query);



	 ?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Data Divisi</title>

			<link rel="stylesheet" type="text/css" href="style2.css">
			<link rel="stylesheet"  href="bootstrap.min.css">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />	
		
		</head>
		<body background="ppo.png">

	<section class="table table-striped">
		<h1 align="center"class="yoi" >Data Divisi</h1>
	

		<table border="1" align="center">
			<tr >
				<th>Code Division</th>
				<th>Nama Division</th>
				<th>Tunjangan</th>
				<th>Nama Pengurus</th>
				<th>keterangan</th>
			</tr>

		<?php
			while ($row=mysqli_fetch_assoc($data)) { 	
		?>
			<tr>
				<td><?php echo $row['kode_divisi'];?></td>
				<td><?php echo $row['nama_divisi'];?></td>
				<td><?php echo $row['tunjangan'];?></td>
				<td><?php echo $row['nama'];?></td>	
				<td>
					<a href="edit_divisi.php?kode_divisi=<?php echo $row['kode_divisi']; ?>">"Edit"</a>
			<a href="hapus_divisi.php?kode_divisi=<?php echo $row['kode_divisi'];?>" onclick="return confirm('Yakin nih mau dihapus??')">Delete
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
						<td>Kode</td>
						<td></td>
						<td><input type="text" name="kode_divisi" required="required" ></td>
					</tr>
					<tr>
						<td>Divisi</td>
						<td></td>
						<td><input type="text" name="nama_divisi" required="required"></td>
					</tr>
					<tr>
						<td>Tunjangan</td>
						<td></td>
						<td><input type="text" name="tunjangan" required="required"></td>
					</tr>
					<tr>
						<td>ID Pengurus</td>
						<td></td>
						<td>
							<select name="id">
<?php
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);

while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
?>

		<option value="<?php echo $row_pengurus['id'] ?>"><?php echo $row_pengurus['nama'] ?></option>
<?php
}
?>
								
							</select>
						</td>
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