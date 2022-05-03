<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="Css/style2.css">       
        <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <title>MVC practice</title>
    </head>
    <body>
        <header></header>
        <main>
            <div class="grid">                
                <div class="item box1">
                    <?php include 'Source/logo.inc.php' ?>
                </div>
                <div class="item box2">
                    <?php include 'Source/menu.inc.php' ?>
                </div>
                <?php 
                    $content_view; 
                ?>
            </div>
        </main>
        <footer>
            <div class="item box13">
                <?php include 'Source/copyright.inc.php' ?>
            </div>
            <div class="item box14">
                <?php include 'Source/soc_logo.inc.php' ?>
            </div>
        </footer>
    </body>
    <script src="JS/script.js"></script> 
</html>