<?php
function calcTVA(float $price) {
    return $price*0.8;
}

function displayProduct(array $product) {
    echo "<td>" . $product["name"] . "</td>
            <td>" . calcTVA($product["price"]) . " €</td>
            <td>";
        if ($product["price"] <= 12) {
            echo '<p style="color:green">';
            } else {
            echo '<p style="color:blue">';
        }
        echo $product["price"] . " €</p></td>
        <td>" . $product["desc"] . "</td>";
}

function displayProductCard(array $product) {
    ?>
    <div class="card m-2" style="width: 18rem;">
        <?= '<img src="' . $product["src"] . '" class="card-img-top">'?>
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
<?php } ?>