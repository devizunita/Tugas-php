<<?php 
//koneksi
require_once('koneksi.php');

$id=$_GET['id'];

//echo $id;
$query="SELECT * FROM tb_pengurus WHERE id= '$id'";
$data=mysqli_query($conn,$query);


//menampung hasil
$row=mysqli_fetch_assoc($data);

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

<body   background="30.png" >
<h1 align="center"  class="sap" >Ubah Data
		<form method="post" action="ubah_data.php">
				
				<table border="0" align="center">
					<tr>
						<td>Masukkan Id</td>
						<td></td>
						<td><input type="text" name="id" required="required" value="<?php echo $row['id'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Nama</td>
						<td></td>
						<td><input type="text" name="nama" required="required" value="<?php echo $row['nama'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Alamat</td>
						<td></td>
						<td><input type="text" name="alamat" required="required" value="<?php echo $row['alamat'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Gender</td>
						<td></td>
						<td><input type="radio" value="L" <?php if (!strcmp($row['gender'],"L")) {echo "CHECKED";
							# code...
						};?> name="gender" required="required">laki-laki
							<input type="radio" value="P" <?php if (!strcmp($row['gender'],"P")) {echo "CHECKED";
							# code...
						};?>  name="gender">Perempuan</td>
					</tr>
					<tr>
						<td>Masukkan Gaji</td>
						<td></td>
						<td><input type="number" name="gaji" value="<?php echo $row['gaji'];?>"></td>
					</tr>
						<tr align="center">
						<td><button type="submit" class="btn btn-outline-info" ><i class="material-icons ">turned_in_not</i>Save</button></td>
					</tr>
					

		
   </table>
</form>
</h1>
</body>
</html>
