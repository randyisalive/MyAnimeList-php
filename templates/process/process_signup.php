<?php
session_start();

include ('../db.php');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$re_enter = $_POST['re_enter'];
$flash = "Account already exist!!";


if ($password == $re_enter) {
    $sql = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($db_connection, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($username == $row['username']) {

            $_SESSION['flash_error_signup'] = $flash;
            echo $flash;
            header('Location: ../signup.php');

        } else {
            $sql = "INSERT INTO users (username, password, email) VALUES ($username, $password, $email)";
            $result = mysqli_query($db_connection, $sql);
            $_SESSION['success'] = "Account created!!";
            header('Location: ../login.php');
        }
    }

}
