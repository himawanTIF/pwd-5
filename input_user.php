<?php
include "koneksi.php";

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST[password]);

$sql = "INSERT INTO users(id_user,nama,email,password) VALUES ('$id_user', '$nama', '$email', '$pass')";
$query = mysqli_query($con, $sql);

mysqli_close($con);

header('location: tampil_user.php');
?>