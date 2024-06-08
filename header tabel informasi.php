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
    <h2>User Table Informasi</h2>
    <table border="1" class="table">
    <tr>
        <th>Id_info</th>
        <th>Nm_info</th>
        <th>Jumlah</th>
        <th>Penerima</th>
        <th>Tanggal</th>
        <th>Informasi</th>
    </tr>

<?php
    //Select Tabel User dari database
    $nomor= 1;
    echo $nomor;
    include 'koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM informasi ")or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <tr>
        <td><?php echo $data['Id_info']; ?></td>
        <td><?php echo $data['Nm_info']; ?></td>
        <td><?php echo $data['Jumlah']; ?></td>
        <td><?php echo $data['Penerima']; ?></td>
        <td><?php echo $data['Tanggal']; ?></td>
        <td><?php echo $data['Informasi']; ?></td>

        <?php } ?>
    </tr>

</table>
</body>
</html>