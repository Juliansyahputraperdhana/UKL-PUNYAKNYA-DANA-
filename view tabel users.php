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
        <th>id</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
        <th>Tombol EDIT</th>
        <th>Tombol DELETE</th>
</tr>
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
    </tr>
    
</table>