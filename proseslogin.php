<?php
session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ){
    $_SESSION = $_POST["logged_in"] = true;
    $_SESSION = $_POST["username"] = $username;

    header("Location: dashbord.php");
}else{
    echo"salah";
    header("Location: login.php?=salah");
    
}
?>