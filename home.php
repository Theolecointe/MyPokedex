<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>



</head>


<body id="page-top">


<?php if (isset($_SESSION['LOGGED_USER'])) {

			include_once('homeConnected.php');
		} 

		else{

			include_once('login.php');
		}
?>

		<div class="footer">
			
			<?php include_once('footer/footer.php'); ?>

		</div>

	</body>
</html>