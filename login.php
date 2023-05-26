<?php  

include_once('configMysql.php');

if (!isset ($_POST ['identifiant']) || (!isset ($_POST['motdepasse']))) {

	echo ('Il faut indiquer ton Nom de Dresseur et ton Mot de Passe pour te connecter');
 }

else {

	$identifiant = $_POST ['identifiant'];
	$motdepasse = $_POST['motdepasse'];

	$checkloggin = $mysqlClient ->prepare('SELECT * FROM dresseur WHERE nom = :nom_dresseur AND password = :password'); 
	$checkloggin -> execute([

		'nom_dresseur' => $identifiant,
		'password' => $motdepasse,
	]);

	$responsecheckloggin = $checkloggin->fetch(PDO::FETCH_ASSOC);

		if($responsecheckloggin){

			echo('connexion réussi'); 

			$loggedUser = $identifiant;
            $_SESSION['LOGGED_USER'] = $loggedUser;
            header("Refresh:0");

        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $identifiant,
                $motdepasse['password'],
            );
        }
    }


    // Si le cookie ou la session sont présentes
    if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'];
}


		else{

			echo('Nom ou Mdp incorrect');
		}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Poke</title>



</head>


<body id="page-top">


	
<h2>Connexion au compte dresseur</h2>
  <form action="home.php" method="post">
    <label for="identifiant">Nom du dresseur:</label>
    <input type="text" id="identifiant" name="identifiant" required><br><br>

    <label for="motdepasse">Mot de passe:</label>
    <input type="password" id="motdepasse" name="motdepasse" required><br><br>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Se connecter"> <br> <br> <br> <br>
    <button onclick="window.location.href = 'createacc.php';">Créer son compte</button>
  </form>


</body>
</html>
