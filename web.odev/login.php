<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}

$uname = $_POST['uname'];
$pass = $_POST['password'];





if (empty($uname)) {

    header("Location: index.php?error=User Email is required");
    exit();
} else if (empty($pass)) {
    header("Location: index.php?error=Password is required");
    exit();
}
$sql = "SELECT * FROM people WHERE user_name='$uname' AND  password='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['user_name'] === $uname && $row['password'] === $pass) {

        echo "Logged in!";
        $_SESSION['user_name'] == $row['user_name'];
        $_SESSION['name'] == $row['name'];
        $_SESSION['id'] == $row['id'];
        header("Location: home.php");
        exit();
    } else {
        header("Location:Location: index.php?error=Incorrect email or password ");
    }
} else {
    header("Location:index.php");
    exit();
}
