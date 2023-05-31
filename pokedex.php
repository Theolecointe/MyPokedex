<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Pokédex</title>
  <style>
    .pokemon {
      display: inline-block;
      width: 150px;
      text-align: center;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .pokemon img {
      width: 100px;
      height: 100px;
    }
    
    .pokemon p {
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <h1>Pokédex</h1>
  
  <div class="pokemon">
    <img src="poke1.png" alt="Pokemon 1">
    <p>BULBIZORRE</p>
    <p>Plante</p>
  </div>
  
  <div class="pokemon">
    <img src="poke2.png" alt="Pokemon 2">
    <p>MYSTHERBE</p>
    <p>Poison</p>
  </div>
  <div class="pokemon">
    <img src="poke3.png" alt="Pokemon 1">
    <p>CANINOS</p>
    <p>Feu</p>
  </div>
  
  <div class="pokemon">
    <img src="poke4.png" alt="Pokemon 2">
    <p>TIPLOUF</p>
    <p>Eau</p>
  </div><div class="pokemon">
    <img src="poke5.png" alt="Pokemon 1">
    <p>ABRA</p>
    <p>Psy</p>
  </div>
  
  <div class="pokemon">
    <img src="poke6.png" alt="Pokemon 2">
    <p>PYROBUT</p>
    <p>Feu</p>
  </div><div class="pokemon">
    <img src="poke7.png" alt="Pokemon 1">
    <p>RAICHU</p>
    <p>Elek</p>
  </div>
  
  <div class="pokemon">
    <img src="poke8.png" alt="Pokemon 2">
    <p>TENTACRUEL</p>
    <p>Eau/Poison</p>
  </div><div class="pokemon">
    <img src="poke9.png" alt="Pokemon 1">
    <p>MAGNETON</p>
    <p>Acier</p>
  </div>
  
  <div class="pokemon">
    <img src="poke10.png" alt="Pokemon 2">
    <p>MEWTWO</p>
    <p>Psy</p>
  </div><div class="pokemon">
    <img src="poke11.png" alt="Pokemon 1">
    <p>ASPICOT</p>
    <p>Plante/Poison</p>
  </div>
  
  <div class="pokemon">
    <img src="poke12.png" alt="Pokemon 2">
    <p>DRACAUFEU</p>
    <p>Feu/Vol</p>
  </div>
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
    height: 2.5rem; /* Hauteur du pied de page */
}
</style>
</div>
  
  
</body>
</html>
