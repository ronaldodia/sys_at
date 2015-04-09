<!DOCTYPE html>
<html lang="fr">
<!--
 * Created by JetBrains PhpStorm.
 * User: AlassaneOusmane
 * Date: 07/04/15
 * Time: 21:34
 * To change this template use File | Settings | File Templates.
 */
 -->
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<?php

include '../model/functions.php'; ?>
<body>
    <div class="container">
            <div class="row">
                <h3>LISTE DES PRDUITS</h3>
            </div>
        <p>
            <a href="create.php" class="btn btn-success">Ajouter un produit</a>
        </p>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Model</th>
                      <th>Prix</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
$produits=allProduct();
                  foreach($produits as $produit){
                      echo "<tr><td> ".$produit["NOM"]."</td><td>".$produit["MODELE"]."</td><td>".$produit["PRIX"]." $ CA</td>";
                      echo "<td><a class='btn' href='read.php?id=".$produit['ID']."'>Afficher les détails</a></td></tr>";

                  }
?>
</tbody>
</table>
</div>
</div> <!-- /container -->
</body>
</html>