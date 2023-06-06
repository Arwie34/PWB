<?php
include("config.php");

if (!isset($_GET['Id'])) { 
    header('Location: list-siswa.php');
}

$id = $_GET['Id'];

$sql = "SELECT * FROM siswa WHERE id=$id"; 
$query = mysqli_query($db, $sql); 
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) { 
    die("Data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value=" <?php echo $siswa['Id']; ?> " >
            <p>
                <label for="iName">Nama: </label>
                <input type="text" name="iName" placeholder="Masukkan nama lengkap..." value="<?php echo $siswa['Nama'] ?>">
            </p>
            <p>
                <label for="iAddress">Alamat: </label>
                <textarea name="iAddress"><?php echo $siswa ['Alamat'] ?></textarea>
            </p>
            <p>
                <label for="iGender">Jenis Kelamin: </label>
                <?php $gender = $siswa['Jenis_Kelamin']; ?>
                <label><input type="radio" name="iGender" value="Laki-Laki" <?php echo ($gender == "Laki-Laki") ? "checked" : "" ?>>Laki-laki</label>
                <label><input type="radio" name="iGender" value="Perempuan" <?php echo ($gender == "Perempuan") ? "checked" : "" ?>>Perempuan</label>
            </p>
            <p>
                <label for="iReligion">Agama: </label>
                <?php $agama = $siswa['Agama']; ?>
                <select name="iReligion">
                    <option <?php
                            echo ($agama == "Islam") ?
                            "selected" : "";?>>
                        Islam
                    </option>
                    <option  <?php
                            echo ($agama == "Kristen") ?
                            "selected" : "";?>>
                       Kristen
                    </option>
                    <option <?php
                            echo ($agama == "Hindu") ?
                            "selected" : "";?>>
                        Hindu
                    </option>
                    <option <?php
                            echo ($agama == "Buddha") ?
                            "selected" : "";?>>
                        Buddha
                    </option>
                    <option <?php
                            echo ($agama == "Atheis") ?
                            "selected" : "";?>>
                        Atheis
                    </option>
                </select>
            </p>
            <p>
                <label for="iSchool">Asal Sekolah: </label>
                <input type="text" name="iSchool"
                placeholder="Masukkan asal sekolah..." value="<?php echo $siswa['Asal_Sekolah']; ?>" >
            </p>
            <p>
                <input type="submit" value="simpan" name="simpan">
            </p>
        </fieldset>
        </form>
</body>
</html>