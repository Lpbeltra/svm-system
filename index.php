<?php
session_start();
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
    <h1 style="text-align: center;">Area de login</h1>
    <form style="text-align: center;" method="POST" action="login_action.php">
        <label>
            ID:
            <input type="number" name="id">
        </label><br></br>

        <label>
            Senha:
            <input type="password" name="password">
        </label><br></br>
        <input type="submit" value="Logar"><br></br>
        <h4><?php if($_SESSION['aviso']) {echo $_SESSION['aviso']; $_SESSION['aviso'] = '';}?></h4>
    </form>
</body>
</html>
