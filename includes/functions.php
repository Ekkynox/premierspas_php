<?php


function calcTVA(float $price)
{
    return round($price / 1.2, 2);
}

function displayProduct(Beanie $product)
{ ?>
    <td class="p-2"><?= $product->getName() ?></td>
    <td class="p-2"><?= calcTVA($product->getPrice()) . " €" ?></td>
    <?php if ($product->getPrice() <= 12) { ?>
        <td class="p-2" style="color:green">
        <?php } else { ?>
        <td class="p-2" style="color:blue">
        <?php }
    echo $product->getPrice() . ' €' ?></td>
        <td class="p-2"> <?= $product->getDesc() ?></td>
    <?php }

function displayProductCard(Beanie $product, $key)
{
    ?>
        <div class="card m-2" style="width: 18rem;">
            <img src=<?= $product->getSrc() ?> class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $product->getName() ?>
                </h5>
                <h6>
                    <?= number_format($product->getPrice(), 2) . ' €' ?>
                </h6>
                <p class="card-text">
                    <?= $product->getDesc() ?>
                </p>
                <a type="button" class="btn btn-light" href="?page=cart&type=more&key=<?= $key ?>">Ajouter au panier</a>
            </div>
        </div>
    <?php
}

function not_empty($value)
{
    $value = trim($value);
    if (empty($value)) {
        return false;
    } else {
        return $value;
    }
}
