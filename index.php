<?php
session_start();
if ($_SESSION['status'] != "login") {
    header('Location: form-login.php?status=belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <head>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Telkom Jakarta</h1>
        <h4>Menu</h4>
    <nav>
    <?php if (isset($_GET['status'])): ?>
<p>
    <?php
        if ($_GET['status'] == 'sukses') { echo "Pendaftaran siswa baru berhasil!"; 
    }else{
        echo "Pendaftaran gagal!";
    }
    ?>
</p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
</head>
