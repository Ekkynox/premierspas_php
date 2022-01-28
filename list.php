<?php include "includes/header.php"?>

<table>
        <thead><tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Prix TVA</th>
            <th>Prix TTC</th>
            <th>Description</th>
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