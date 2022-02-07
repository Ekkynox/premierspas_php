<?php
function calcTVA(float $price)
{
    return round($price / 1.2, 2);
}

function displayProduct(array $product)
{ ?>
    <td class="p-2"><?= $product["name"] ?></td>
    <td class="p-2"><?= calcTVA($product["price"]) . " €" ?></td>
    <?php if ($product["price"] <= 12) { ?>
        <td class="p-2" style="color:green">
        <?php } else { ?>
        <td class="p-2" style="color:blue">
        <?php }
    echo $product["price"] . ' €' ?></td>
        <td class="p-2"> <?= $product["desc"] ?></td>
    <?php }

function displayProductCard(array $product, $key)
{
    ?>
        <div class="card m-2" style="width: 18rem;">
            <img src=<?= $product["src"] ?> class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $product["name"] ?>
                </h5>
                <h6>
                    <?= number_format($product["price"], 2) . ' €' ?>
                </h6>
                <p class="card-text">
                    <?= $product["desc"] ?>
                </p>
                <a type="button" class="btn btn-light" href="?page=cart&type=more&key=<?= $key ?>">Ajouter au panier</a>
            </div>
        </div>
    <?php }


function not_empty($value)
{
    if ($value == " " || empty($value)) {
        return false;
    } else {
        return $value;
    }
}
