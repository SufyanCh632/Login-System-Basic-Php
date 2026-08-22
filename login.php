<?php
include "db_conn.php";
if (isset($_POST['uname'], $_POST['password'])) {

    $uname = trim($_POST['uname']);
    $password = $_POST['password'];

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }

    if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Hello";
    } else {
        echo "Invalid username or password";
    }

} else {
    header("Location: index.php?error=Username and password are required");
    exit();
}
?>