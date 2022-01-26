<?php
    include "variables.php";
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnets</title>
</head>
<body>
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
</body>
</html>