<?php
include("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="box">
            <h1>Log In</h1>
            <h5>silahkan login terlebih dahulu</h5>
        <form action="proseslogin.php" method="post" >
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
                    <button type="submit">Login</button>
                </td>
                <tr>
                    
                    <h6>belum mempunyai akun?<a href="register.php">register</a></h6>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>