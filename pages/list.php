<?php
$selecSize = "";
$selecMaterial = "";
$selecPriceMin = "";
$selePriceMax = "";

if (isset($_POST["size"])) {
    $selecSize = $_POST["size"];
}
if (isset($_POST["material"])) {
    $selecMaterial = $_POST["material"];
}
if (isset($_POST["priceMin"])) {
    $selecPriceMin = $_POST["priceMin"];
}
if (isset($_POST["priceMax"])) {
    $selecPriceMax = $_POST["priceMax"];
}
?>

<form class="w-75 my-5 m-auto d-flex align-items-center justify-content-center" method="POST">
    <label>Filtres</label>

    <div class="input-group mx-4">
        <span class="input-group-text">Taille </span>
        <select class="form-select" name="size">
            <option value="" <?php if ($selecSize == "") {
    echo "selected";
}?>>Sélectionner une taille</option>
            <?php foreach (Beanie::AVAILABLE_SIZES as $i => $size) { ?>
                <option <?php if (isset($selecSize) && $selecSize != "" && $selecSize == $i) {
    echo "selected";
} ?> value="<?= $i ?>"><?= $size ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="input-group mx-4">
        <span class="input-group-text">Matière </span>
        <select class="form-select" name="material">
            <option value="" <?php if ($selecMaterial == "") {
    echo "selected";
}?>>Sélectionner une matière</option>
            <?php foreach (Beanie::AVAILABLE_MATERIALS as $i => $material) { ?>
                <option <?php if (isset($selecMaterial) && $selecMaterial != "" && $selecMaterial == $i) {
    echo "selected";
} ?> value="<?= $i ?>"><?= $material ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-text">Prix min </span>
        <input type="number" class="form-control me-4" name="priceMin" value="<?php if (isset($selecPriceMin) && $selecPriceMin != "") {
    echo $selecPriceMin;
} ?>" placeholder="0">
    </div>
    <div class="input-group">
        <span class="input-group-text">Prix max </span>
        <input type="number" class="form-control me-4" name="priceMax" value="<?php if (isset($selecPriceMax) && $selecPriceMax != "") {
    echo $selecPriceMax;
} ?>" placeholder="100">
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
        <?php foreach (array_filter($myProducts, "filter_form") as $key => $product) { ?>
            <tr>
                <td> <?= $key ?> </td>
                <?php displayProduct($product) ?>
                <td class="p-2"> <a type="button" class="btn btn-light" href="?page=cart&type=more&key=<?= $key ?>">Ajouter au panier</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>