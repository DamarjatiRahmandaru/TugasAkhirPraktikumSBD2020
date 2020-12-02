<?php
	//put file which is connected to database
	include "config.php";

	//take all parameters through get method
	$id_peserta = $_GET['id_peserta'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM peserta WHERE id_peserta=$id_peserta") or die(mysqli_error());

	if ($query) {
		echo "<script>alert('Data berhasil di hapus.');<script>";
		header('location:awal.php?page=daftarpeserta');
		
	}
?>