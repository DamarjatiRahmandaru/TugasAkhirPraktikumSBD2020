<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <div class="page">
<body>
    <br/>
    <form action="awal.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
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
    session_start();
    include_once ("config.php");
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:login.php");
    }
?>
      				 <?php include_once("config.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM peserta");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_peserta']; ?></td>
                      <td><?php echo $baris['id_lomba']; ?></td>
      				  <td><?php echo $baris['nama_tim']; ?></td>
                      <td><?php echo $baris['nama_pembimbing']; ?></td>
      				  <td><?php echo $baris['nama_angg_1']; ?></td>
      				  <td><?php echo $baris['nama_angg_2']; ?></td>
                      <td><?php echo $baris['asal']; ?></td>
                      <td><?php echo $baris['no_telpon']; ?></td>
                      <td><?php echo $baris['mail']; ?></td>

                      <td align="center">
                      <a href="editpeserta.php?id_peserta=<?php echo $baris['id_peserta']; ?>">EDIT</a>
                      <a href="hapuspeserta.php?id_peserta=<?php echo $baris['id_peserta']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>