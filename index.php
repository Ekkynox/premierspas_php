<?php ob_start();
    include "includes/header.php";

    if (isset($_GET["page"]) && file_exists('pages/' . $_GET["page"] . '.php')) {
        $redir = new Page($_GET["page"]);
        include $redir->getPath();
    } else {
        include 'pages/home.php';
    }

    include "includes/footer.php";
    ob_end_flush();
