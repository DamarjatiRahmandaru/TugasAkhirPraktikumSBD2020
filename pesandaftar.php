<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "<script>alert('Data berhasil di input.');</script>";
		echo "<script>alert('Silahkan Menghubungi Admin bila sudah melakukan pembayaran!');history.go(-1);</script>";
	}else if($pesan == "update"){
		echo "<script>alert('Data berhasil di update.');history.go(-1);</script>";
	}else if($pesan == "hapus"){
		echo "<script>alert('Data berhasil di hapus.');history.go(-1);</script>";
	}
}
?>