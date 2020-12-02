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
	<table border="1">
		<tr>
            <th>ID PEMBAYARAN</th>
            <th>TANGGAL PEMBAYARAN</th>
			<th>ID PESERTA</th>
			<th>NAMA TIM</th>
			<th>NAMA PEMBIMBING</th>
			<th>NAMA ANGGOTA 1</th>
            <th>NAMA ANGGOTA 2</th>
            <th>ASAL</th>
            <th>NO TELPON</th>
            <th>E-MAIL</th>
		</tr>

    <?php 
    include_once("config.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT pembayaran.id_pembayaran, pembayaran.tanggal, peserta.id_peserta, peserta.nama_tim, peserta.nama_pembimbing, peserta.nama_angg_1, peserta.nama_angg_2, peserta.asal, peserta.no_telpon, peserta.mail FROM peserta INNER JOIN pembayaran ON peserta.id_peserta=pembayaran.id_peserta");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_pembayaran']; ?></td>
                      <td><?php echo $baris['tanggal']; ?></td>
                      <td><?php echo $baris['id_peserta']; ?></td>
      				  <td><?php echo $baris['nama_tim']; ?></td>
                      <td><?php echo $baris['nama_pembimbing']; ?></td>
      				  <td><?php echo $baris['nama_angg_1']; ?></td>
      				  <td><?php echo $baris['nama_angg_2']; ?></td>
                      <td><?php echo $baris['asal']; ?></td>
                      <td><?php echo $baris['no_telpon']; ?></td>
                      <td><?php echo $baris['mail']; ?></td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>