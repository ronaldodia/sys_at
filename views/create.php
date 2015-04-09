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

    <div class="span10 center">
        <div class="row">
            <h3>Créer un produit</h3>
        </div>

        <form class="form-horizontal" action="create.php" method="post">
            <div class="control-group ">
                <label class="control-label">Nom du produit</label>
                <div class="controls">
                    <input name="nom" type="text"  placeholder="Name" >

                        <span class="help-inline"></span>


                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Modele du produit</label>
                <div class="controls">
                    <input name="modele" type="text" placeholder="Modele" >

                        <span class="help-inline"></span>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Marque du produit</label>
                <div class="controls">
                    <input name="marque" type="text"  placeholder="La Marque"">

                        <span class="help-inline"></span>

                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">Détails</label>
                <div class="controls">
                    <textarea name="detail"  placeholder="Détails"></textarea>
                        <span class="help-inline"></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Le prix du produit</label>
                <div class="controls">
                    <input name="prix" type="text"  placeholder="Le prix">

                        <span class="help-inline"></span>

                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Créer</button>
                <a class="btn" href="index.php">Retour</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
<?php


if ( !empty($_POST)) {

    // keep track post values
    $nom = $_POST['nom'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $detail=$_POST['details'];
    $prix=$_POST['prix'];
        echo "fffffffffff";
        $ajout_succes=addProduct($nom,$modele,$marque,$detail,$prix);
        if( $ajout_succes){
            echo "ajout réuissi";
        }
        else echo "erreur ";

}
?>
</body>