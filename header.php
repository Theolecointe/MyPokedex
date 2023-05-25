<!DOCTYPE html>
<html>
<head>
  <title>Site Pokemon</title>
  <style>
    /* Styles CSS pour l'en-tête */
    header {
      background-color: #f2f2f2;
      padding: 20px;
      display: flex;
      align-items: center;
    }

    .header-box {
      margin-right: 17px;
    }

    .header-box button {
      background: none;
      border: none;
      font-size: 16px;
      color: #333;
      cursor: pointer;
    }

    .header-image {
      margin-right: 20px;
      width: 100px;
    }
  </style>
</head>
<body>
  <header>
    <img src="pokedex2.png" alt="Logo Pokemon" class="header-image">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <?php if (isset($_SESSION['utilisateur_connecte'])) { ?>

      <style>
    /* Styles CSS pour l'en-tête */
    header {
      background-color: #2a75bb;
      padding: 20px;
      display: flex;
      align-items: center;
    }

    .header-box {
      margin-right: 17px;
    }

    .header-box button {
      background: none;
      border: none;
      font-size: 16px;
      color: #333;
      cursor: pointer;
    }

    .header-image {
      margin-right: 20px;
      width: 100px;
    }
  </style>
      
      <div class="header-box"> 
      <button onclick="window.location.href = 'page-info.html';">Mes Pokemons</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-pokedex.html';">Mes combats</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-connexion.html';">Pokedex</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-mes-pokemons.html';">Info</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-pokedex.html';">Connexion</button>
    </div>


    <?php } else { ?>
      <div class="header-box">
        <button onclick="window.location.href = 'page-info-non-connecte.php';">Info</button>
      </div>
      <div class="header-box">
        <button onclick="window.location.href = 'page-connexion.php';">Connexion</button>
      </div>
      <div class="header-box">
        <button onclick="window.location.href = 'page-inscription.php';">Inscription</button>
      </div>

    <?php } ?>
  </header>
</body>
</html>
