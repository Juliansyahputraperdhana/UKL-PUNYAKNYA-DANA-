<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Table</title>
    <style>
        h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #DFEBF8;
        }
    </style>
</head>
<body>
    <h2>User Table Kelompok Tani</h2>
    <table>
    <tr>
        <th>Id_Laporan</th>
        <th>Nm_laporan</th>
        <th>penerima</th>
        <th>tanggal</th>
        <th>id_k_tani</th>
    </tr>

    <?php
    //Select Tabel User dari database
    $nomor= 1;
    echo $nomor;
    include 'koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM kelompoktani ")or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <tr>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['anggota']; ?></td>
        <td><?php echo $data['nm_k_tani']; ?></td>
        <td><?php echo $data['id_k_tani']; ?></td>

        <?php } ?>
    </tr>
    </table>
</body>
</html>