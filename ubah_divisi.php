<<?php

//koneksi
require_once('koneksi.php');

//ambil data dari from
	$kode_divisi=$_POST['kode_divisi'];
	$nama_divisi=$_POST['nama_divisi'];
	$tunjangan=$_POST['tunjangan'];
	$id=$_POST['id'];

	//memasukkan data ke database
	$query="UPDATE tb_divisi SET kode_divisi= '$kode_divisi', nama_divisi= '$nama_divisi', tunjangan='$tunjangan', id='$id' WHERE kode_divisi= '$kode_divisi' ";
	$ubah=mysqli_query($conn,$query);

	header('location: tampil_divisi.php');

?>