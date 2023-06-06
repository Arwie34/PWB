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
        <h3>formulir pendaftaran</h3>
    </header>
    <form action="proses-register.php" method="post">
        <fieldset>
            <p>
                <label for="iUsername">Username: </label>
                <input type="text" name="iUsername" placeholder="Masukkan username..">
            </p>
            <p>
                <label for="iEmail">Email: </label>
                <input type="email" name="iEmail" placeholder="Masukkan email..">
            </p>
            <p>
                <label for="iPassword">Password: </label>
                <input type="password" name="iPassword" placeholder="Masukkan password..">
            </p>
            <p>
                <input type="submit" value="register" name="register">
            </p>
        </fieldset>
    </form>
</body>
</html>