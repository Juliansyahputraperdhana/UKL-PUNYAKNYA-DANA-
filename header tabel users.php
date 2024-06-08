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
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #909090;
        }
    </style>
</head>
<body>

<h2>User Table Users</h2>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
            <!-- Tambahkan kolom sesuai kebutuhan -->

            <?php
    //Select Tabel User dari database
    include 'koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM users")or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)){
        ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['level']; ?></td>
        
        <td><a href="edit data.php?id=<?php echo $data['id'];?>">edit</a></td>
        
        <td><a href='delete_user.php?id=<?php echo $data['id'];?>'>Delete</a></td>
        
        <?php } ?>
    </thead>
    <tbody>
        <!-- Data user akan ditampilkan di sini -->
    </tbody>
</table>

</body>
</html>