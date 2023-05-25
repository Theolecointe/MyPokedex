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
  <form action="ajouter.php" method="POST">
    <label for="Pokemon">Pokemon:</label>
    <input type="text" id="Pokemon" name="Pokemon" required>

    <label for="type">type:</label>
    <select id="type" name="type" required>
      <option value="">Sélectionner un type</option>
      <?php
        // Inclure le fichier de configuration de la base de données
        include_once("configMysql.php");

        // Récupérer les types depuis la base de données
        $query = "SELECT * FROM types";
        $result = $mysqlClient->query($query);

        // Vérifier s'il y a des types
          foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) 
          {
            echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
          }
      ?>
    </select>

    <label for="Région">Région:</label>
    <select id="Région" name="Région" required>
      <option value="">Sélectionner une région</option>
    </select>
  </form>
</body>
</html>