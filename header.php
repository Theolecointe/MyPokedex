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
    <div class="header-box">
      <button onclick="window.location.href = 'page-connexion.html';">Pokedex</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-mes-pokemons.html';">Info</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-pokedex.html';">Connexion</button>
    </div>
  </header>
</body>
</html>
