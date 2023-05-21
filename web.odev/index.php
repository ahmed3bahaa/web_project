<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <form action="login.php" method="POST">
        <h2>login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> Kullanıcı Adı</label>
        <input class="input" type="text" name="uname" placeholder="User name"><br>
        <label>Şifre</label>
        <input class="input" type="password" name="password" placeholder="Password"><br>

        <button type="submit">login</button>
    </form>

</body>

</html>