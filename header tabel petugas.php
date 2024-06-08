<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #5f5f5f;
        }

        th {
            background-color: #4b4b4b;
        }
    </style>
</head>
<body>

<h2>User Table Petugas</h2>

<table>
    <thead>
    <tr>
        <th>id_petugas</th>
        <th>nama</th>
        <th>alamat</th>
        <th>no_telepon</th>
        <th>email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
            <!-- Tambahkan kolom sesuai kebutuhan -->

            <?php
    //Select Tabel User dari database
    $nomor= 1;
    echo $nomor;
    include 'koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM petugas ")or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <tr>
        <td><?php echo $data['id_petugas']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['no_telepon']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a href="edit data petugas.php?id=<?php echo $data['id_petugas'];?>">edit</a></td>
        <td><a href='delete_user.php?id=<?php echo $data['id_petugas'];?>'>Delete</a></td>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
        <!-- Data user akan ditampilkan di sini -->
    </tbody>
</table>

</body>
</html>