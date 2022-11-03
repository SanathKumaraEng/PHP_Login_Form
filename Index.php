<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
    <form action="Login.php" method="post">
        <H2>LOGIN</H2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">User Name</label>
        <input type="text" name="uname" placeholder="User Name"> <br>
        <label for="">Password</label>
        <input type="text" name="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>