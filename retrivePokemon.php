<?php 



include_once('configMysql.php');

$nom_dresseur = $_SESSION['LOGGED_USER'];

	$retrivePokemon = $mysqlClient ->prepare('SELECT pokemon.nom, dresseur.nb_combats, region.nom as region_nom, type.nom as type, pokemons_existants.id FROM pokemon JOIN pokemons_existants ON pokemons_existants.id_Pokemon = pokemon.id JOIN dresseur ON dresseur.id = pokemons_existants.id_dresseur JOIN region ON pokemon.id_region = region.id JOIN est_de_type ON pokemon.id = est_de_type.id_pkmn JOIN type ON est_de_type.id_Type = type.id WHERE dresseur.nom = :nom_dresseur GROUP BY pokemons_existants.id');

	$retrivePokemon -> execute([

		'nom_dresseur' => $nom_dresseur,
	]);

	

	$responseRetrivePokemon = $retrivePokemon->fetchAll(PDO::FETCH_ASSOC);

	//print_r($responseRetrivePokemon);

?>