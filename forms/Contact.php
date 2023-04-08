<?php
include "./database.php";

$name      = $_POST['name'];
$email     = $_POST['email'];
$theme     = $_POST['theme'];
$message   = $_POST['message'];

$sql      = "INSERT INTO ContactUs (name, email, theme, message)
VALUES ('$name', '$email', '$theme', '$message')";

echo $sql;
$resul  = mysqli_query($conn, $sql) or trigger_error("Query Faild SQL - ERROR: ".mysqli_error($conn), E_USER_ERROR);

header("location: ../index.php");
?>