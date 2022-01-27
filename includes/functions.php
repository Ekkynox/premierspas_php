<?php
function calcTVA(float $price) {
    return round($price/1.2, 2);
}

function displayProduct(array $product) {
    echo '<td class="p-2">' . $product["name"] . '</td>
            <td class="p-2">' . calcTVA($product["price"]) . " €</td>
            ";
        if ($product["price"] <= 12) {
            echo '<td class="p-2" style="color:green">';
            } else {
            echo '<td class="p-2" style="color:blue">';
        }
        echo $product["price"] . ' €</td>
        <td class="p-2">' . $product["desc"] . "</td>";
}

function displayProductCard(array $product) {
    ?>
    <div class="card m-2" style="width: 18rem;">
    <img src=<?= $product["src"]?> class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">
                <?= $product["name"] ?>
            </h5>
            <h6>
                <?= $product["price"]. ' €' ?>
            </h6>
            <p class="card-text">
                <?= $product["desc"] ?>
            </p>
        </div>
    </div>
<?php }

function logIn() {

}?>