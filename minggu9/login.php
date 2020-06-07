<?php
//cek tombol submit
if (isset($_POST["submit"]) ){

    //cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else

    //jika salah, pesan error
    $eror = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h1>
        Login Admin
    </h1>

        <?php if (isset($eror)) : ?>
        <p style="color: red; font-style:italic;">Username / Password Anda Salaaaaaaah</p>
        <?php endif; ?>

    <table>
        <tr>
            <form action="" method="POST">
            <td><label for="username">Username</label>
            <td>:
            <td><input type="text" name="username" id="username">
        </tr>
        <tr>
            <td><label for="password">Password</label>
            <td>:
            <td><input type="password" name="password" id="password">
        </tr>      
        <tr>
            <td colspan="3" align="center"><button type="submit" name="submit">Login</button>
        </tr>
            </form>
    </table>

</body>
</html>