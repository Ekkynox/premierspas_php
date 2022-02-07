<?php
    $cart = new Cart();
    $cart->addToCart();

if (isset($_SESSION['cart']) && !(empty($_SESSION['cart']))) { ?>
    <table>
        <thead>
            <tr>
                <th class="p-2">Nom</th>
                <th class="p-2">Quantité</th>
                <th class="p-2">Prix TTC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $prixTot = 0;
            foreach ($_SESSION['cart'] as $key => $quantity) {
                $prixTot += $myProducts[$key]->getPrice() * $quantity; ?>
                <tr>
                    <td class="p-2"> <?= $myProducts[$key]->getName() ?> </td>
                    <td class="p-2"> <?= $quantity ?> </td>
                    <td class="p-2"> <?= number_format($myProducts[$key]->getPrice() * $quantity, 2) ?> € </td>
                    <td class="p-2"> <a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&type=plus">+1</a>
                        <a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&type=moins">-1</a>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
    <p>Prix total : <?= number_format($prixTot, 2) ?> €</p>
<?php
} else { ?>
    <p class="m-5">Votre panier est vide.</p>
<?php } ?>