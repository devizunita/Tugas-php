<<?php 
//koneksi
require_once('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];


//echo $id;
$query="SELECT * FROM tb_divisi WHERE kode_divisi= '$kode_divisi'";
$data=mysqli_query($conn,$query);


//menampung hasil
$row=mysqli_fetch_assoc($data);

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

<body   background="ppo.png" >
<h1 align="center"  class="yoi" >Ubah Data
		<form method="post" action="ubah_divisi.php">
				
				<table border="0" align="center">
					<tr>
						<td>Kode</td>
						<td></td>
						<td><input type="text" name="kode_divisi" required="required" value="<?php echo $row['kode_divisi'];?>"></td>
					</tr>
					<tr>
						<td>Divisi</td>
						<td></td>
						<td><input type="text" name="nama_divisi" required="required" value="<?php echo $row['nama_divisi'];?>"></td>
					</tr>
					<tr>
						<td>Tunjangan</td>
						<td></td>
						<td><input type="text" name="tunjangan" required="required" value="<?php echo $row['tunjangan'];?>"></td>
					</tr>
					<tr>
						<td>ID Pengurus</td>
						<td></td>
						<td>
							<select name="id" value="<?php echo $row['nama'];?>">
<?php
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);

while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
?>

		<option value="<?php echo $row_pengurus['id'] ?>"  <?php if (!strcmp($row['id'],$row_pengurus['id'])) {echo "SELECTED";
							# code...
						};?>><?php echo $row_pengurus['nama'] ?></option>
<?php
}
?>
								
							</select>
						</td>
					</tr>
					<tr align="center">
						<td><button type="submit" class="btn btn-outline-primary" ><i class="material-icons ">turned_in_not</i>Save</button></td>
						<td></td>
					</tr>
		</form>

			</div>
		</table>
</form>
</h1>
</body>
</html>
