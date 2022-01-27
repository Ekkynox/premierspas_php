<?php
    include_once "includes/header.php";
?>

<div class="d-flex">
    <?php   
    for ($i = 0; $i < 3; $i++) {
        displayProductCard($myProducts[$i]);
    } ?>
</div>

<a href="list.php"><button type="button" class="btn btn-light">Voir tous les produits</button></a>

<?php
    include_once "includes/footer.php";
?>