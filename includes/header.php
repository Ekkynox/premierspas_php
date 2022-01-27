<?php
    require_once "includes/variables.php";
    require_once "includes/functions.php";
    session_start();
    if(isset($_POST['username']) && !(empty($_POST['username'])) && $_POST['password'] == $mdp) {
        $_SESSION['login'] = $_POST['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnets</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Bonelaine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=list">Liste des produits</a>
                    </li>
                    <?php if (isset($_SESSION['login'])) {?>
                        <li class="nav-item">
                        <a class="nav-link" href="?page=logout">Se déconnecter</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="?page=login">Se connecter</a>
                        </li>
                    <?php } ?>
                </ul>
                <span class="navbar-text"><?php if(isset($_SESSION['login'])) { 
                    echo $_SESSION['login']; }?>
                </span>
            </div>
        </div>
    </nav>

