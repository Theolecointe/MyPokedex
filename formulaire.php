<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Ajout d'un Pokemon</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }
    h2 {
      color: #333;
      text-align: center;
      margin-top: 30px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-top: 20px;
      font-weight: bold;
      color: #555;
    }
    select {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      transition: border-color 0.3s ease;
    }
    select:focus {
      outline: none;
      border-color: #4CAF50;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      margin-top: 20px;
      cursor: pointer;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .error-message {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h2>Ajout d'un Pokemon</h2>
  <form action="addpokemon.php" method="POST">
    <label for="Pokemon">Pokemon:</label>
    <input type="text" id="name" name="name" required>

    <label for="type">type:</label>
    <select id="type" name="type" required>
      <option value="">Sélectionner un type</option>
      <?php
        // Inclure le fichier de configuration de la base de données
        include_once("configMysql.php");

        // Récupérer les types depuis la base de données
        $query = "SELECT * FROM type";
        $result = $mysqlClient->query($query);

        // Vérifier s'il y a des types
          foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) 
          {
            echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
          }
      ?>
    </select>

    <label for="Région">Région:</label>
    <select id="region" name="region" required>
      <option value="">Sélectionner une région</option>
      <?php
        // Inclure le fichier de configuration de la base de données
        include_once("configMysql.php");

        // Récupérer les types depuis la base de données
        $query = "SELECT * FROM region";
        $result = $mysqlClient->query($query);

        // Vérifier s'il y a des types
          foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) 
          {
            echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
          }
      ?>
    </select>
    <input type="submit"></input>
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
