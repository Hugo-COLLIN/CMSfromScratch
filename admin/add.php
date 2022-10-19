<?php
session_start();

include_once ('../includes/connection.php');

if (isset($_SESSION['logged_in']))
{
    //TODO
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

        <h4>Add article</h4>

        <form action="add.php" method="post" autocomplete="off">
            <input type="text" name="title" placeholder="Title"><br><br>
            <textarea rows="15" cols="60" placeholder="Content"></textarea>
            <input type="submit" value="Publish article !">
        </form>

    </div>
    </body>
    </html>
    <?php
}
else
    header('Location: index.php');