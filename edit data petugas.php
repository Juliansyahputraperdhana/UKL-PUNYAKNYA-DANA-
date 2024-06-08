<?php
include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_petugas']) ){
    header('Location:view tabel petugas.php');
}
$id =  $_GET['id_petugas'];

// Fetech petugas data based on id
$result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE id_petugas=$id_petugas");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $no_telepon = $user_data['no_telepon'];
    $email = $user_data['email'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Petugas</title>
</head>
<body>
    <header>
        <h3>Fomulir Edit Petugas</h3>
    </header>
    <form action="edit data petugas ke 2.php" method="post">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="teks" nama="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="teks" alamat="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr>
                <td>no_telepon</td>
                <td><input type="teks" no_telepon="no_telepon" value="<?php echo $no_telepon; ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td>
            <select name="email" id_petugas="email" value="<?php echo $email; ?>" required>
            <option disabled selected></option>
                <option value="budi@example.com">budi@example.com</option>
                <option value="ayu@example.com">ayu@example.com</option>
                <option value="rudi@example.com	">rudi@example.com</option>
                <option value="siti@example.com	">siti@example.com</option>
            </select>
            </td>
            </tr>
        <tr>
            <input type="hidden" name="id_petugas" value=<?php echo $_GET['id_petugas'];?>>
            <input type="submit" name="Simpan" value="Simpan">
        </tr>
    </table>
</form>
</body>
</html>