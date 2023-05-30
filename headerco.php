 <div>

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

  <img src="pokedex2.png" alt="Logo Pokemon" class="header-image">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
   
      
      <div class="header-box"> 
      <button onclick="window.location.href = 'home.php';">Mes Pokemons</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'page-pokedex.html';">Mes combats</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'pokedex.php';">Pokedex</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'info.php';">Info</button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'formulaire.php';">Ajouter un Pokemon </button>
    </div>
    <div class="header-box">
      <button onclick="window.location.href = 'home.php?disconnect=true';">Déconnexion</button>
      <?php
      if(isset($_GET["disconnect"]))
      {
        $_SESSION = array();
          session_destroy();
          header("location: home.php");
      }


// Détruire toutes les variables de session


?>
  

</div>