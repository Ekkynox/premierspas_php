<div class="d-flex">
    <?php   
    for ($i = 0; $i < 3; $i++) {
        displayProductCard($myProducts[$i]);
    } ?>
</div>

<a href="?page=list"><button type="button" class="btn btn-light">Voir tous les produits</button></a>