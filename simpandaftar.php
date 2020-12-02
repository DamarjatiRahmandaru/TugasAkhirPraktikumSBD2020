<?php include 'config.php';
$id_peserta = $_POST['id_peserta'];
$id_lomba = $_POST['id_lomba'];
$namatim = $_POST['nama_tim'];
$namapembimbing = $_POST['nama_pembimbing'];
$namaanggota1 = $_POST['nama_angg_1'];
$namaanggota2 = $_POST['nama_angg_2'];
$asal = $_POST['asal'];
$notelpon = $_POST['no_telpon'];
$email = $_POST['mail'];

  $query = mysqli_query($koneksi, "INSERT INTO peserta VALUES('$id_lomba', '$id_peserta', '$namatim', '$namapembimbing', '$namaanggota1', '$namaanggota2', '$asal', '$notelpon', '$email')") or die(mysqli_error($koneksi));
	if ($query) {
		header("location:pesandaftar.php?pesan=input");
	}
  exit();
?>