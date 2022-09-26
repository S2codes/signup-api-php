<?php
    $msg = '';
    if (isset($_GET['msg'])) {
        $msg = 'Registration Sucessful. Please Login to Continue!';
    }

    if (isset($_POST['login'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'loginn';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
        echo '<p>'.$msg.'</p>';
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="pass" placeholder="Password">
        <button type="submit" name="login">Login</button>
    </form>
<a href="forgotpassword.php">Forgot Password</a>
</body>
</html>