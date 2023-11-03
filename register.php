<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box">
        <h1>register</h1>
        <h5>silahkan register terlebih dahulu</h5>
    <form action="prosesregis.php" method="post" >
        <table >
            <tr>
                <td>
                    <label>username </label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <td>
                <button type="submit">Register</button>
            </td>
            <tr>
                
                <h6>sudah mempunyai akun?<a href="login.php">login</a></h6>
            </tr>
        </table>
    </form>
</div>
</body>
</html>