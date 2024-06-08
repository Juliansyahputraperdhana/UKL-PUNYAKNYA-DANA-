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
        <th>tanggal</th>
        <th>alamat</th>
        <th>anggota</th>
        <th>nm_k_tani</th>
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