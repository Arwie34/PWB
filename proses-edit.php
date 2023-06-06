<?php
include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $name = $_POST['iName'];
    $address = $_POST['iAddress'];
    $gender = $_POST['iGender'];
    $religion = $_POST['iReligion'];
    $school =  $_POST['iSchool'];

    $sql = "UPDATE siswa SET Nama='$name', Alamat='$address', Jenis_Kelamin='$gender', Agama='$religion', Asal_Sekolah='$school' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal memperbarui data...");
    }
}else{
    die("Gagal terhubung dengan situs...");
}
?>