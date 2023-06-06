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
        <h3>Login</h3>
    </header>
    <nav>
        <?php if(isset($_GET['status'])): ?>
    </nav>
    <p>
        <h4>
            <nav>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Akun Berhasil dibuat!";
                } elseif ($_GET['status'] == 'belum_login') {
                    echo "Login dulu";
                } else {
                    die("Registrasi gagal");
                }
            ?>
        </h4>
    </p>
    <?php endif; ?>
    </nav>
    <form action="proses-login.php" method="post">
        <fieldset>
            <p>
                <label for="IEmail">Email: </label>
                <input type="email" name="iEmail" placeholder="Masukkan Email..">
            </p>
            <p>
                <label for="IPassword">Password: </label>
                <input type="password" name="iPassword" placeholder="Masukkan Password..">
            </p>
            <p>
                <input type="submit" value="login" name="Login">
            </p>
        </fieldset>
    </form>
    <p>
        Belum punya akun? Daftar <a href="form-register.php">di sini</a>
    </p>
</body>
</html>