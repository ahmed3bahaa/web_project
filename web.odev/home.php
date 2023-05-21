<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <h1>hello , <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php">logout</a>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>