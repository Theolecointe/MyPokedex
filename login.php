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

			setcookie(
            'LOGGED_USER',
            $loggedUser,
            [
                'expires' => time() + 365*24*3600,
                'secure' => true,
                'httponly' => true,
            ]
            );

            $_SESSION['LOGGED_USER'] = $loggedUser;
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $identifiant,
                $motdepasse['password'],
            );
        }
    }


    // Si le cookie ou la session sont présentes
    if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];
}


		else{

			echo('Nom ou Mdp incorrect');
		}


?>

