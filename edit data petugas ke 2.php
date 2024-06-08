<?php 
include("koneksi.php");
if(isset($_POST['Simpan'])) {
    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    
    $result = mysqli_query($mysqli, "UPDATE petugas SET nama='$nama', alamat='$alamat', no_telepon='$no_telepon', email='$email' WHERE id_petugas=$id_petugas");
header('location:view tabel petugas.php');
}
?>