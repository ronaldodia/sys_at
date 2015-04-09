<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AlassaneOusmane
 * Date: 07/04/15
 * Time: 21:56
 * To change this template use File | Settings | File Templates.
 */
require_once("../bd/Database.php");
function allProduct(){
$pdo = Database::connect();
$sql = 'SELECT * FROM produit ORDER BY id DESC';
return  $pdo->query($sql);
Database::disconnect();
}

function addProduct($nom,$modele,$marque,$details,$prix){

    $resultat=false;
    $pdo = Database::connect();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO produit (NOM,MODELE,MARQUE,DETAIL,PRIX) values(?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    echo "je suis là";
   $q->execute(array($nom,$modele,$marque,$details,$prix));

    $resultat=true;
    Database::disconnect();
    return $resultat;

}