<?php 

session_start();

include_once('configMysql.php');

$nom_dresseur = $_SESSION['LOGGED_USER'];

    $retrivePokemon = $mysqlClient ->prepare('SELECT pokemon.nom FROM pokemon JOIN pokemons_existants ON pokemons_existants.id_Pokemon = pokemon.id JOIN dresseur ON dresseur.id = pokemons_existants.id_dresseur WHERE dresseur.nom = :nom_dresseur '); 
    $retrivePokemon -> execute([

        'nom_dresseur' => $nom_dresseur,
    ]);

    $responseRetrivePokemon = $retrivePokemon->fetchAll(PDO::FETCH_ASSOC);
    foreach ($responseRetrivePokemon as $r) 
   	{
    	echo $r["nom"];
	}
?>