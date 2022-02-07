<table>
    <thead>
        <tr>
            <th class="p-2">N°</th>
            <th class="p-2">Nom</th>
            <th class="p-2">Prix TVA</th>
            <th class="p-2">Prix TTC</th>
            <th class="p-2">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($myProducts as $key => $product) { ?>
            <tr>
                <td> <?= $key ?> </td>
                <?php displayProduct($product) ?>
                <td class="p-2"> <a type="button" class="btn btn-light" href="?page=cart&type=more&key=<?= $key ?>">Ajouter au panier</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>