<?php 
include("koneksi.php");
if(isset($_POST['Simpan'])) {
    $ID = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $result = mysqli_query($mysqli, "UPDATE users SET nama='$nama', username='$username', password='$password', level='$level' WHERE id=$ID");
header('location:view tabel users.php');
}
?>