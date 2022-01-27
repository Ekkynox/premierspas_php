<?php
    ob_start();
    include "includes/header.php";

    if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'login' :
            include 'pages/login.php';
            break;
        case 'list' :
            include 'pages/list.php';
            break;
        case 'logout' :
            include 'pages/logout.php';
            break;
        default :
            include 'pages/home.php';
            break;
    }
        
    } else {
        include 'pages/home.php';
    }

    include "includes/footer.php";
    ob_end_flush();
?>