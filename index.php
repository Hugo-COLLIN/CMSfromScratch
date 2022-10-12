<?php
include_once('includes/connection.php');
include_once ('includes/Article.php');

$article = new Article();
$articles =$article->fetch_all();

//print_r($articles);

//echo time();
//echo md5('password');
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
            <?php
            foreach ($articles as $art) {
            ?>
            <li>
                <a href="article.php?id=<?php echo $art['art_id']; ?>">
                    <?php echo $art['art_title']; ?>
                </a>
                - <small>posted <?php echo date('l jS', $art['art_timestamp']); ?></small>
            </li>
            <?php } ?>
        </ol>
        <br>
        <small><a href="admin">admin</a></small>
    </div>
</body>
</html>