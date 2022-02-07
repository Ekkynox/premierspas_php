<?php $filters = new BeanieFilter();

if (isset($_POST["size"])) {
    $filters->setSize($_POST["size"]);
}
if (isset($_POST["material"])) {
    $filters->setMaterial($_POST["material"]);
}
if (isset($_POST["priceMin"])) {
    $filters->setPriceMin($_POST["priceMin"]);
}
if (isset($_POST["priceMax"])) {
    $filters->setPriceMax($_POST["priceMax"]);
}
?>

<form class="w-75 my-5 m-auto d-flex align-items-center justify-content-center" method="POST">
    <label>Filtres</label>

    <div class="input-group mx-4">
        <span class="input-group-text">Taille </span>
        <select class="form-select" name="size">
            <option value="" <?php if ($filters->getSize() == "") {
    echo "selected";
}?>>Sélectionner une taille</option>
            <?php foreach (Beanie::AVAILABLE_SIZES as $i => $size) { ?>
                <option <?php if ($filters->getSize() != "" && $filters->getSize() == $i) {
    echo "selected";
} ?> value="<?= $i ?>"><?= $size ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="input-group mx-4">
        <span class="input-group-text">Matière </span>
        <select class="form-select" name="material">
            <option value="" <?php if ($filters->getMaterial() == "") {
    echo "selected";
}?>>Sélectionner une matière</option>
            <?php foreach (Beanie::AVAILABLE_MATERIALS as $i => $material) { ?>
                <option <?php if ($filters->getMaterial() != "" && $filters->getMaterial() == $i) {
    echo "selected";
} ?> value="<?= $i ?>"><?= $material ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-text">Prix min </span>
        <input type="number" class="form-control me-4" name="priceMin" value="<?= $filters->getPriceMin();?>">
    </div>
    <div class="input-group">
        <span class="input-group-text">Prix max </span>
        <input type="number" class="form-control me-4" name="priceMax" value="<?= $filters->getPriceMax();?>">
    </div>
    <button type="submit" name="submit" class="btn btn-light">Rechercher</button>
</form>

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
        <?php $filteredProducts = array_filter($myProducts, function ($var) use ($filters) {
    $result = true;
    if ($filters->getSize() != "" && !in_array(Beanie::AVAILABLE_SIZES[$filters->getSize()], $var->getSize())) {
        $result = false;
    } elseif ($filters->getMaterial() != "" && !in_array(Beanie::AVAILABLE_MATERIALS[$filters->getMaterial()], $var->getMaterial())) {
        $result = false;
    } elseif ($filters->getPriceMin() != "" && $var->getPrice() < $filters->getPriceMin()) {
        $result = false;
    } elseif ($filters->getPriceMax() != "" && $var->getPrice() > $filters->getPriceMax()) {
        $result = false;
    }
    return $result;
});
foreach ($filteredProducts as $key => $product) { ?>
            <tr>
                <td> <?= $key ?> </td>
                <?php displayProduct($product) ?>
                <td class="p-2"> <a type="button" class="btn btn-light" href="?page=cart&type=plus&key=<?= $key ?>">Ajouter au panier</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>