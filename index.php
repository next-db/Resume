<?php
if (file_exists("pages/" . $_GET['page'] . ".php"))
    include_once "pages/" . $_GET['page'] . ".php";
else
    include_once "pages/404.php";

include_once "main.php";
?>