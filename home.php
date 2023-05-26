<?php include 'header.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Poke</title>



</head>


<body id="page-top">


<?php if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {

			echo ('Page une fois connecté');
		} 

		else{

			include_once('login.php');
		}
?>

</body>
</html>