<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="email" name="email" placeholder="email">
        <button type="submit" name="submmit">Submit</button>
    </form>
</body>
</html>