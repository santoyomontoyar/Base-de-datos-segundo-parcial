<?php
require_once '../../lib/config.php';
$id = $_POST['id'];
$query = "DELETE FROM teachers WHERE id = $id";
$connection->query($query); 
header('Location: ./');
?>