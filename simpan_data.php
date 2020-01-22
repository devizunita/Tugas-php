	<?php
		//koneksi
	require_once('koneksi.php');

	//ambil data dari from
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$gender=$_POST['gender'];
	$gaji=$_POST['gaji'];

	$query="INSERT INTO tb_pengurus VALUES('$id', '$nama', '$alamat', '$gender', '$gaji')";
	$simpan=mysqli_query($conn,$query);


	//langsung pindah ke laman tampil data
	header('location: tampil_data.php');


	//ambil data dari from
	$kode_divisi=$_POST['kode_divisi'];
	$nama_divisi=$_POST['nama_divisi'];
	$tunjangan=$_POST['tunjangan'];
	$id=$_POST['id'];

	$query="INSERT INTO tb_divisi VALUES('$kode_divisi', '$nama_divisi', '$tunjangan', '$id')";
	$simpan=mysqli_query($conn,$query);

	header('location: tampil_divisi.php');



	if ($simpan) {
		echo "Data Berhasil Disimpan";
		}else{
			echo "Data Gagal Disimpan";
		}
	?>

	<a href="tampil_data.php">Kembali untuk lihat data </a>