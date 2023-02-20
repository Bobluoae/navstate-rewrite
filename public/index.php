<?php

if (!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

if ($_GET["page"] === "home") {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
        </head>
        <body>
            <h1>Home</h1>

            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=blog">Blog</a></li>
                <li><a href="?page=about">About</a></li>
            </ul>

            <div style="width: 200px; height: 200px; background-color: red;">

            </div>

        </body>
        </html>
    <?php
}
if ($_GET["page"] === "blog") {
    require "blog.html";
}
if ($_GET["page"] === "about") {
    require "about.html";
}


?>
