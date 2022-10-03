<?php
include_once('includes/connection.php');

echo time();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Tutorial</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <a href="index.php" id="logo">CMS</a>

        <ol>
            <li><a href="article.php?id=1">Article title</a> - <small>posted 10th Jan</small></li>
        </ol>
    </div>
</body>
</html>