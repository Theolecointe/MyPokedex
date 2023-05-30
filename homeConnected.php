<?php 


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


		<table>
		    <thead>
			    <tr>
			        <th>Nom</th>
			        <th>Région</th>
			        <th>Type</th>
			    </tr>
		    </thead>
		    <tbody>
		      
		    	<?php


		    		foreach ($responseRetrivePokemon as $row) {
		    			
		            echo "<tr>";
		            echo "<td>" . $row["nom"] . "</td>";
		            echo "<td>" . $row["region_nom"] . "</td>";



		            $retriveType = $mysqlClient ->prepare('SELECT type.nom as type FROM type JOIN est_de_type ON est_de_type.id_Type =
		            	type.id JOIN pokemon ON est_de_type.id_pkmn = pokemon.id WHERE pokemon.nom = :nompokemon'); 
		            $retriveType -> execute([

		            	'nompokemon' => $row['nom'],

		            ]);

		            $responseRetriveType = $retriveType->fetchAll(PDO::FETCH_ASSOC);

		            echo "<td>";

		            foreach ($responseRetriveType as $line) {

		            	echo ($line['type']);

		            }
		            echo "</td>";

		    		}


		         
		        
		    	?>
		    </tbody>
  	</table>

	
</body>
</html>