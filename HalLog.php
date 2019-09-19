<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head>
<body>
    <?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "keiza" && $b == "1803") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        header("location: datadiri.php");
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=HalLog.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body>
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>

    </html>
<?php
}
?>

    <!-- JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery Pertama, Selanjutnya bebas.js-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Js -->
</body>
</html>