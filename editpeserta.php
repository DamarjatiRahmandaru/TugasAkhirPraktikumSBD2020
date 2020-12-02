<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_peserta = $_POST['id_peserta'];
    $id_lomba = $_POST['id_lomba'];
    $namatim = $_POST['nama_tim'];
    $namapembimbing = $_POST['nama_pembimbing'];
    $namaanggota1 = $_POST['nama_angg_1'];
    $namaanggota2 = $_POST['nama_angg_2'];
    $asal = $_POST['asal'];
    $notelpon = $_POST['no_telpon'];
    $email = $_POST['mail'];
    

    // update user data
    $result = mysqli_query($koneksi, "UPDATE peserta SET id_lomba='$id_lomba',nama_tim='$namatim',nama_pembimbing='$namapembimbing', nama_angg_1='$namaanggota1', nama_angg_2='$namaanggota2', asal='$asal', no_telpon='$notelpon', mail='$email' WHERE id_peserta='$id_peserta'");

    // Redirect to homepage to display updated user in list
    header("Location:awal.php?page=daftarpeserta");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_peserta = $_GET['id_peserta'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta=$id_peserta");

while($user_data = mysqli_fetch_assoc($result))
{
    $id_peserta = $user_data['id_peserta'];
    $id_lomba = $user_data['id_lomba'];
    $namatim = $user_data['nama_tim'];
    $namapembimbing = $user_data['nama_pembimbing'];
    $namaanggota1 = $user_data['nama_angg_1'];
    $namaanggota2 = $user_data['nama_angg_2'];
    $asal = $user_data['asal'];
    $notelpon = $user_data['no_telpon'];
    $email = $user_data['mail'];
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">  
    <div class=header><title>Edit Daftar Peserta</title></div>
    
</head>

<body>
<div class="bingkai">
    
    <br/><br/>

    <div class=header><h2>Daftar Peserta</h2></div>

    <form method="post" action="editpeserta.php">
        <table border="1">
            <tr>
            <td><input type="hidden" name="id_peserta" value=<?php echo $_GET['id_peserta'];?>></td>
            <tr>
            <tr> 
                <td>Id Lomba</td>
                <td><input type="text" name="id_lomba" value="<?php print("$id_lomba");?>"></td>
            </tr>
            <tr> 
                <td>Nama Tim</td>
                <td><input type="text" name="nama_tim" value="<?php print("$namatim");?>"></td>
            </tr>
            <tr> 
                <td>Nama Pembimbing</td>
                <td><input type="text" name="nama_pembimbing" value="<?php print("$namapembimbing");?>"></td>
            </tr>
            <tr> 
                <td>Nama Anggota 1</td>
                <td><input type="text" name="nama_angg_1" value="<?php echo $namaanggota1;?>"></td>
            </tr>
            <tr> 
                <td>Nama Anggota 2</td>
                <td><input type="text" name="nama_angg_2" value="<?php echo $namaanggota2;?>"></td>
            </tr>
            <tr> 
                <td>Asal</td>
                <td><input type="text" name="asal" value="<?php echo $asal;?>"></td>
            </tr>
            <tr> 
                <td>No Telpon</td>
                <td><input type="text" name="no_telpon" value="<?php echo $notelpon;?>"></td>
            </tr>
            <tr> 
                <td>E-mail</td>
                <td><input type="text" name="mail" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
        <a href="awal.php">Home</a>
    </form>
    </div>
</body>
</html>
