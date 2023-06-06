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
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="post">
    <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap...">
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" 
            value="Laki-laki">Laki-laki</label> 
            <label><input type="radio" name="jenis_kelamin" 
            value="Perempuan">Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>  
                <option>Kristen</option>
                <option>Hindu</option>                 
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah asal: </label> 
            <input type="text" name="sekolah_asal" placeholder="Sekolah asal... ">
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar">
        </p>
     </fieldset>
    </form>
    </body>
</html>