<div class="d-flex">
    <?php
    $i = 0;
    foreach ($myProducts as $key => $product) {
        displayProductCard($myProducts[$i]);
        ++$i;
        if ($i == 3) {
            break;
        }
    }
    unset($i); ?>
</div>

<a href="?page=list"><button type="button" class="btn btn-light">Voir tous les produits</button></a>