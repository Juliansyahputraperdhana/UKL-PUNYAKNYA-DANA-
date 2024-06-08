<style>
.table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
}
 
.table1, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
}
</style>
<table border="1" class="table">
    <tr>
        <th>id_petugas</th>
        <th>nama</th>
        <th>alamat</th>
        <th>no_telepon</th>
        <th>email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
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
    
</table>