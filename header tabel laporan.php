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
    <h2>User Table Laporan</h2>
    <table>
        <tr>
        <th>Id_Laporan</th>
        <th>Nm_laporan</th>
        <th>penerima</th>
        <th>tanggal</th>
        </tr>
        <?php
    //Select Tabel User dari database
    $nomor= 1;
    echo $nomor;
    include 'koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM laporan ")or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <tr>
        <td><?php echo $data['Id_Laporan']; ?></td>
        <td><?php echo $data['Nm_laporan']; ?></td>
        <td><?php echo $data['penerima']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        
        <?php } ?>
    </tr>
    </table>
</body>
</html>