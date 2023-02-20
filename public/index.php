<?php

if ($_SERVER['REQUEST_URI'] === "/") {
    $url = "/home";
}
else {
    $url = $_SERVER['REQUEST_URI'];
}


if ($url === "/home") {
    require "home.html";
}
if ($url === "/blog") {
    require "blog.html";
}
if ($url === "/about") {
    require "about.html";
}

// die($_SERVER['REQUEST_URI']);
