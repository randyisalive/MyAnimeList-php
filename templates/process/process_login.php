<?php
include('../db.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db_connection, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['email'] = $row['email'];
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . " " . $row["password"] . "</td></tr>";
    }
    echo "</table>";
    header("Location: ../index.php");
} else {
    $_SESSION['flash_error'] = "Wrong Credentials";
    echo "Wrong Credentials";
    header('Location: ../login.php');
}
?>
<a href="../index.php">Home</a>