<?php
    require "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO `login` (username, password ) VALUES ( '$username', '$password')";

    if (mysqli_query($conn, $query)){
        echo "registrasi sukses";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    header("Location: login.php");



?>