<?php
include_once('includes/connection.php');
include_once ('includes/Article.php');

$article = new Article();

if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    $data = $article->fetch_data($id);
    //print_r($data);
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

    </div>
    </body>
    </html>
<?php
}
else
{
    header("Location: index.php");
    exit();
}