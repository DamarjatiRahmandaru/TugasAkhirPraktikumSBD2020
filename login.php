<?php
session_start();
include "config.php";
if(isset($_POST['login_admin'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    require_once "config.php";
    
	$query = "SELECT * FROM dash WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query) OR die(mysqli_error($koneksi));

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header("Location:awal.php");
    }
    else {
       echo "<script>alert('username atau password salah'); history.go(-1); </script>";
    }
}
else {
    echo "<script>alert('data'); history.go(-1); </script>";
}
?>