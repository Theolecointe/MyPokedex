<?php
session_start();


include_once('configMysql.php')

// Vérifie si l'utilisateur est connecté
function isUserLoggedIn() {
    return isset($_SESSION['LOGGED_USER']);
}

// Vérifie si l'utilisateur possède un Pokémon spécifique dans son Pokédex
function doesUserHavePokemon($pokemonId) {
    // Remplacez le code ci-dessous par votre propre logique de vérification dans la base de données
    // par exemple, vous pouvez récupérer les Pokémon du Pokédex de l'utilisateur connecté depuis votre base de données
    // et vérifier si le Pokémon spécifié est présent dans cette liste
    
$addmyPokemon = $mysqlClient ->prepare('SELECT pokemon.nom, dresseur.nb_combats, region.nom as region_nom, type.nom as type FROM pokemon JOIN pokemons_existants ON pokemons_existants.id_Pokemon = pokemon.id JOIN dresseur ON dresseur.id = pokemons_existants.id_dresseur JOIN region ON pokemon.id_region = region.id JOIN est_de_type ON pokemon.id = est_de_type.id_pkmn JOIN type ON est_de_type.id_Type = type.id WHERE dresseur.nom = :nom_dresseur');
	
	$addmyPokemon -> execute([

    return in_array($pokemonId, $userPokedex);
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Pokédex</title>
  <style>
    .pokemon {
      display: inline-block;
      width: 150px;
      text-align: center;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .pokemon img {
      width: 100px;
      height: 100px;
    }
    
    .pokemon p {
      margin: 5px 0;
    }
    
    .pokemon button {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Pokédex</h1>
  
  <div class="pokemon">
    <img src="poke1.png" alt="Pokemon 1">
    <p>BULBIZORRE</p>
    <p>Plante</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(1)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke2.png" alt="Pokemon 2">
    <p>MYSTHERBE</p>
    <p>Poison</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(2)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  <div class="pokemon">
    <img src="poke3.png" alt="Pokemon 1">
    <p>CANINOS</p>
    <p>Feu</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(3)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke4.png" alt="Pokemon 2">
    <p>TIPLOUF</p>
    <p>Eau</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(4)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>

  </div><div class="pokemon">
    <img src="poke5.png" alt="Pokemon 1">
    <p>ABRA</p>
    <p>Psy</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon((5))): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke6.png" alt="Pokemon 2">
    <p>PYROBUT</p>
    <p>Feu</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(6)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>

  <div class="pokemon">
    <img src="poke7.png" alt="Pokemon 1">
    <p>RAICHU</p>
    <p>Elek</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(7)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke8.png" alt="Pokemon 2">
    <p>TENTACRUEL</p>
    <p>Eau/Poison</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(8)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>

  <div class="pokemon">
    <img src="poke9.png" alt="Pokemon 1">
    <p>MAGNETON</p>
    <p>Acier</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(9)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke10.png" alt="Pokemon 2">
    <p>MEWTWO</p>
    <p>Psy</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(10)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>

  <div class="pokemon">
    <img src="poke11.png" alt="Pokemon 1">
    <p>ASPICOT</p>
    <p>Plante/Poison</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(11)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>
  
  <div class="pokemon">
    <img src="poke12.png" alt="Pokemon 2">
    <p>DRACAUFEU</p>
    <p>Feu/Vol</p>
    <?php if (isUserLoggedIn() && doesUserHavePokemon(12)): ?>
        <button>Relâcher</button>
    <?php else: ?>
        <button>Ajouter</button>
    <?php endif; ?>
  </div>

  
  <!-- Ajoutez le bouton pour les autres Pokémon ici -->
  
  <script>
    function addToPokedex(pokemonId) {
      // Effectuez ici la logique d'ajout du Pokémon au Pokédex
      // Par exemple, vous pouvez envoyer une requête AJAX au serveur pour enregistrer le Pokémon dans la session
      // ou mettre à jour une base de données
      
      // Voici un exemple qui affiche une alerte avec l'identifiant du Pokémon ajouté
      alert('Le Pokémon avec l\'ID ' + pokemonId + ' a été ajouté à votre Pokédex!');
    }
  </script>
</body>
</html>
