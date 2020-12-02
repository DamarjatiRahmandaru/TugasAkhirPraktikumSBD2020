<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <div class="page">
    <br/>
    <form action="awal.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
    <div class=bingkai>
<div class=header><h2>Pencarian Peserta</h2></div>
<form action="pencarian.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php include_once ("config.php");
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
    <th>ID PESERTA</th>
            <th>ID LOMBA</th>
			<th>NAMA TIM</th>
			<th>NAMA PEMBIMBING</th>
			<th>NAMA ANGGOTA 1</th>
            <th>NAMA ANGGOTA 2</th>
            <th>ASAL</th>
            <th>NO TELPON</th>
            <th>E-MAIL</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi, "SELECT * from peserta where nama_tim like '%".$cari."%' OR id_peserta like '%".$cari."%' OR nama_tim like '%".$cari."%' OR no_telpon like '%".$cari."%' OR nama_pembimbing like '%".$cari."%' OR nama_angg_1 like '%".$cari."%' OR nama_angg_2 like '%".$cari."%' OR asal like '%".$cari."%' OR mail like '%".$cari."%' order by id_peserta asc	");				
		}else{
			$data = mysqli_query($koneksi, "SELECT * from peserta order by id_peserta asc");		
	}
	$no = 1;
	while($d = mysqli_fetch_assoc($data)){
	?>
	<tr>
                      <td><?php echo $d['id_peserta']; ?></td>
                      <td><?php echo $d['id_lomba']; ?></td>
      				  <td><?php echo $d['nama_tim']; ?></td>
                      <td><?php echo $d['nama_pembimbing']; ?></td>
      				  <td><?php echo $d['nama_angg_1']; ?></td>
      				  <td><?php echo $d['nama_angg_2']; ?></td>
                      <td><?php echo $d['asal']; ?></td>
                      <td><?php echo $d['no_telpon']; ?></td>
                      <td><?php echo $d['mail']; ?></td>
	</tr>
	<?php } ?>
                </table>
            </body>
            </html>