<?php
 session_start();
 include 'koneksi.php';

 $users = $_POST['username'];
 $pass = $_POST['password'];

 $logins = mysqli_query ($mysqli, "SELECT * FROM users WHERE username='$users' AND password='$pass'");
 $hasil = mysqli_num_rows($logins);

 if ($hasil > 0){
    $data = mysqli_fetch_assoc($logins);
    if($data['level']=='admin'){
        $_SESSION['nama'] = $users;
        $_SESSION['password'] = $pass;
        $_SESSION['level']="admin";
        header("location:view tabel users.php");
    }elseif($data['level']=='users'){
        $_SESSION['nama'] = $users;
        $_SESSION['password'] = $pass;
        $_SESSION['level']="users";
        header("location:Pengelolahan-ikan-kaleng.html");
 }else{
    header("location:index.php");
 }
}else{
    header("location:index.php?pesan=gagal");
}
?>