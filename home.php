<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Poke</title>



</head>


<body id="page-top">

<!--/ Barre de navigation /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">MyPokedex</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Connexion</a>
            <button onclick="window.location.href = 'createacc.php';">Créer un compte</button>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Infos du site</a>
            <button onclick="window.location.href = 'nouvelle-page.html';">Infos du site</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Fin de la Barre de Navigation /-->
	
<h2>Connexion au compte dresseur</h2>
  <form action="traitement.php" method="post">
    <label for="identifiant">Nom du dresseur:</label>
    <input type="text" id="identifiant" name="identifiant" required><br><br>

    <label for="motdepasse">Mot de passe:</label>
    <input type="password" id="motdepasse" name="motdepasse" required><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Se connecter"> <br> <br> <br> <br>
    <button onclick="window.location.href = 'createacc.php';">Créer son compte</button>
  </form>


</body>
</html>