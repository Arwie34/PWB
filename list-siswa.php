<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">Tambah Data</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$siswa['Id']."</td>";
                    echo "<td>".$siswa['Nama']."</td>";
                    echo "<td>".$siswa['Alamat']."</td>";
                    echo "<td>".$siswa['Jenis_Kelamin']."</td>";
                    echo "<td>".$siswa['Agama']."</td>";
                    echo "<td>".$siswa['Asal_Sekolah']."</td>";
                    
                    echo "<td>";
                    echo "<a href='form-edit.php?Id=".$siswa['Id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?Id=".$siswa['Id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
            
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>