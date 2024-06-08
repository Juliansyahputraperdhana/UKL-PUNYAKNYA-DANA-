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