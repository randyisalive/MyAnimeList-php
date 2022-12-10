<?php
include('../../templates/db.php');
session_start();

if (isset($_SESSION['username'])) {

$title = $_POST['title'];
$body = $_POST['body'];
$user_id = $_SESSION['id'];

$sql = "INSERT INTO article (title, body, users_id) VALUES ('$title', '$body', '$user_id')";

$result = mysqli_query($db_connection, $sql);

$db_connection->close();

header("Location: ../../../../../../Server Side Programming/FINAL/templates/index.php");

} else {
    header("Location: ../../../../../../Server Side Programming/FINAL/templates/login.php");
}


?>



