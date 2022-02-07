<?php
if (isset($_GET['key'])) {
    if (isset($_SESSION['cart'][$_GET['key']])) {
        $_SESSION['cart'][$_GET['key']] += 1;
    } else {
        $_SESSION['cart'][$_GET['key']] = 1;
    }
    header('Location: ?page=home');
}
?>

<div class="d-flex">
    <?php
    $i = 0;
    foreach ($myProducts as $key => $product) {
        displayProductCard($myProducts[$i], $key);
        ++$i;
        if ($i == 3) {
            break;
        }
    }
    unset($i); ?>
</div>

<a href="?page=list"><button type="button" class="btn btn-light">Voir tous les produits</button></a>