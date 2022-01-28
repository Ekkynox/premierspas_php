<?php if (isset($_GET['type']) && isset($_GET['key'])) {
    if ($_GET['type'] == 'moins') {
        $_SESSION['cart'][$_GET["key"]] -= 1;
    } else if ($_GET['type'] == 'plus') {
        $_SESSION['cart'][$_GET["key"]] += 1;
    }
    if ($_SESSION['cart'][$_GET["key"]] == 0) {
        unset($_SESSION['cart'][$_GET["key"]]);
    }
    header('Location: ?page=cart');
}

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
            <?php foreach ($_SESSION['cart'] as $key => $product) { ?>
                <tr>
                    <td> <?= $myProducts[$key]['name'] ?> </td>
                    <td> <?= $product ?> </td>
                    <td> <?= $myProducts[$key]['price'] * $product ?> </td>
                    <td class="p-2"> <a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&type=plus">+1</a>
                        <a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&type=moins">-1</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php } else { ?>
    <p class="m-5">Votre panier est vide.</p>
<?php } ?>