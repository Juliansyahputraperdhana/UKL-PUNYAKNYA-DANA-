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