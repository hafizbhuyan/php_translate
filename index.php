<?php

include 'translate.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Translation Website</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><?php echo $lang['home']; ?></a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><?php echo $lang['shop']; ?></a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><?php echo $lang['contact']; ?></a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><?php echo $lang['faq']; ?></a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <h2><?php echo $lang['description']; ?></h2>
                <a href="index.php?lang=en"><?php echo $lang['lang_en']; ?></a>
                <a href="index.php?lang=es"><?php echo $lang['lang_es']; ?></a>
            </div>
        </div>
    </body>
</html>