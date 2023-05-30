<?php include 'header.php'; ?>



<!DOCTYPE html>
<html>
<head>
  <title>Création de compte</title>
</head>
<body>
  <h1>Création de compte</h1>

  <form action="submitcreateaccount.php" method="post">
    <label for="nom">Nom du dresseur:</label>
    <input type="text" id="nom" name="nom" required><br><br>

  

    <label for="motdepasse">Mot de passe:</label>
    <input type="password" id="motdepasse" name="password" required><br><br>


    <label for="motdepasse">A combien estimez vous votre niveau ? :</label>
    <input name="slider" type="range" min="0" max="20" step="1" value="5" /> <br> <br>

    <input type="submit" value="Créer votre compte">

    
  </form>
  <div class="footer">
<?php include_once('footer/footer.php'); ?>
<style>
html,
body {
    height: 100%;
    margin: 0;
}

.page-wrapper {
    min-height: 100%;
    position: relative;
}

.content-wrapper {
    padding-bottom: 2.5rem; /* Hauteur du pied de page */
}

.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 6rem; /* Hauteur du pied de page */
}
</style>
</div>
</body>
</html>
