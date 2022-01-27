<?php include "includes/header.php"?>

<table>
        <thead><tr>
            <th class="p-2">N°</th>
            <th class="p-2">Nom</th>
            <th class="p-2">Prix TVA</th>
            <th class="p-2">Prix TTC</th>
            <th class="p-2">Description</th>
        </tr></thead>
        <tbody>
            <?php foreach ($myProducts as $key => $product) {
            echo "<tr><td>" . $key . "</td>";
            displayProduct($product);
            echo "</tr>";
            }?>
        </tbody>
    </table>

<?php include "includes/footer.php"?>