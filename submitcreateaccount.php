<?php  

include_once("configMysql.php"); 


if (isset($_POST["nom"]) && isset($_POST["password"]))
{ 

	$nom = $_POST["nom"];
	$password = $_POST["password"];
	$checkexistdresseur = $mysqlClient ->prepare('SELECT * FROM dresseur WHERE nom = '$nom''); 
	$checkexistdresseur -> execute(); 

	$responsecheckloggin = $checkexistdresseur->fetch(PDO::FETCH_ASSOC);
	echo($responsecheckloggin);

	echo($responsecheckloggin);

}
else
{
	echo("not set");
}




?>	

