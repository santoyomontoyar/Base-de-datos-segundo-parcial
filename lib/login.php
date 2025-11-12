<?php

if(!isset($_POST) || empty($_POST)){
    header("Location: ../");
    return false;
}

if($_POST['emailLogin'] == "" || $_POST['passwordLogin'] == "") {
    header("Location: ../");
    return false;
}

$emailLogin = $_POST['emailLogin'];
$passwordLogin = $_POST['passwordLogin'];

require_once "config.php";
$query = "SELECT * FROM teachers WHERE email = '$emailLogin' AND password = '$passwordLogin'";
$connection ->query($query);
$result = $connection ->query($query);
print_r($result);


if($result->num_rows == 0){
    header(("location: ../"));
    return false;
}

$user = $result->fetch_object();
session_start(); 
$_SESSION['email'] = $emailLogin;
$_SESSION['name'] = $user->name;

header("Location: ../modules/teachers");
?>