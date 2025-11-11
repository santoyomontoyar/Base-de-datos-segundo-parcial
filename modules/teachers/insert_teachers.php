<?php
require_once '../../lib/config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO teachers (name, email, password) VALUES ('$name', '$email', '$password')";
$connection->query($query);
header('Location: ./')
?>