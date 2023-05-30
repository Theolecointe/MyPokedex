<?php
        include_once("configMysql.php");

// submit_contact.php

if (!isset($_POST['name']) || !isset($_POST['type']) || !isset($_POST['region'])) {
    echo('Il manque une information.');
    return;
}

$nom = $_POST['name'];
$type_id = $_POST['type'];
$region_id = $_POST['region'];

echo $nom;
echo $type_id;
echo $region_id;

try {
    // Début de la transaction
    $mysqlClient->beginTransaction();

    // Étape 1 : Insérer les données dans la table "pokemon" et récupérer l'ID du nouveau Pokémon
    $stmtPokemon = $mysqlClient->prepare("INSERT INTO pokemon (nom, id_region) VALUES (:nom, :region)");
    $stmtPokemon->bindParam(':nom', $nom);
    $stmtPokemon->bindParam(':region', $region_id);
    $stmtPokemon->execute();
    $pokemonId = $mysqlClient->lastInsertId();

    // Étape 2 : Insérer les données dans la table d'association "est_de_type"
    $stmtAssociation = $mysqlClient->prepare("INSERT INTO est_de_type (id_pkmn, id_type) VALUES (:pokemon_id, :type_id)");
    $stmtAssociation->bindParam(':pokemon_id', $pokemonId);
    $stmtAssociation->bindParam(':type_id', $type_id);
    $stmtAssociation->execute();

    // Valider la transaction
    $mysqlClient->commit();

    echo "Les données du formulaire ont été ajoutées avec succès dans la base de données. #SUCCES";
} catch (PDOException $e) {
    // En cas d'erreur, annuler la transaction
    $mysqlClient->rollBack();
    echo "Une erreur s'est produite lors de l'ajout des données du formulaire dans la base de données. #ECHEC : " . $e->getMessage();
}
?>

