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