<?php  

include_once("configMysql.php"); 


if (isset($_POST["nom"]) && isset($_POST["password"]))
{ 

	$nom = $_POST["nom"];
	$password = $_POST["password"];
	$checkexistdresseur = $mysqlClient ->prepare('SELECT nom FROM dresseur WHERE nom = :nom'); 
	$checkexistdresseur -> execute([  

		 'nom' => $nom,
	]); 

	$responsecheckloggin = $checkexistdresseur->fetch(PDO::FETCH_ASSOC);

	if ($responsecheckloggin == True) {

		echo('Ce nom d\'utilisateur existe déja, choisi en un autre');
	}

	else{

		$includeutilisateur = $mysqlClient ->prepare('INSERT INTO dresseur (nom, password) VALUES (:nom, :password)'); 
		$includeutilisateur -> execute([  

		 'nom' => $nom,
		 'password' => $password,

		]); 

		if($includeutilisateur){

			echo ("Nouveau Compte Créer avec Succes");
		}
	}

}
else
{
	echo("Il faut donner un Nom et un Mot de passe pour créer un compte");
}




?>	

