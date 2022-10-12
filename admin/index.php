<?php

session_start();

include_once ('../includes/connection.php');

if (isset($_SESSION['logged_in']))
{
    //display index

}
else
{
    //display login
    if (isset($_POST['username'], $_POST['password']))
    {
        $uname = $_POST['username'];
        $pwd = $_POST['password'];

        if (empty($uname) OR empty($pwd))
            $error = "All fields are required !";
    }
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CMS Tutorial</title>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
    <div class="container">
        <h2><a href="index.php" id="logo">CMS</a></h2>

        <small id="errMsg">
            <?php if (isset($error)) echo $error; ?>
            <br><br>
        </small>

        <form id="formLogin" action="./" method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">

        </form>

    </div>
    </body>
    </html>
<?php }