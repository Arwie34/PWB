<?php
    include("config.php");

    if (isset($_GET['Id'])) { 
        $id = $_GET['Id'];

    $sql = "DELETE FROM siswa WHERE Id=$id"; 
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location: list-siswa.php');
    }else{
        die("Gagal menghapus...");
    }
}else{
    die("Akses dilarang...");
}
?>