<?php 
//koneksi
require_once('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

//echo $id;
$query="DELETE FROM tb_divisi WHERE  kode_divisi='$kode_divisi'";
$data=mysqli_query($conn,$query);

//langsung pindah ke laman tampil data
	header('location: tampil_divisi.php');



 ?>

