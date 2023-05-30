<?php session_start(); 

include_once('header.php'); 

include_once('retrivePokemon.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

	<div id="links">
		<button href='' id='pokedex_button'>Pokedex</button>

		<button>Dresseurs à mettres au tapis</button>

	</div>

	<br>
	<br>

	<div class="firstInfos"> 
		Nom de dresseur : <?php echo($nom_dresseur); ?><br> 
		<span id ="fightCount">Nombres de combats : <?php echo($responseRetrivePokemon[0]['nb_combats']); ?> </span>
	</div>

	<h1> Mes Pokemon </h1>


		Nom 

		Type 

		Region

		Sexe


	
</body>
</html>