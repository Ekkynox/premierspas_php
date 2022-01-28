<?php ob_start();
    include "includes/header.php";

    if (isset($_GET["page"]) && file_exists('pages/' . $_GET["page"] . '.php')) {
        include 'pages/' . $_GET["page"] . '.php';
    } else {
        include 'pages/home.php';
    }

    include "includes/footer.php";
    ob_end_flush(); ?>