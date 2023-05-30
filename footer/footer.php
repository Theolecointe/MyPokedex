<?php
// Déclaration de la variable $siteName et assignation de la valeur "MyPokeDesk"
$siteName = "MyPokeDesk";

// Utilisation de la fonction date() pour obtenir l'année en cours et assignation de la valeur à la variable $year
$year = date('Y');

// Création d'un tableau associatif $pages avec le nom des pages et leurs URLs correspondantes
$pages = array(
    "Accueil" => "home.php",
    "Mes Pokemons" => "/page1.php",
    "Tous les Pokemons" => "pokedex.php"
);
?>

<!-- Début du pied de page avec des styles CSS -->
<footer style="text-align: center; background-color: #f2f2f2; padding: 20px;">
    
    <div>
        <!-- Affichage du copyright avec l'année et le nom du site -->
        <?php echo "&copy; ".$year." ".$siteName." - Tous droits réservés"; ?>
    </div>

    <!-- Début d'une nouvelle div avec une marge en haut de 10px -->
    <div style="margin-top: 10px;">
        <?php 
        // Boucle foreach pour parcourir le tableau $pages
        foreach ($pages as $pageName => $pageURL) { ?>
            <!-- Affichage de chaque lien avec une marge à droite de 10px -->
            <a href="<?php echo $pageURL; ?>" style="margin-right: 10px;">
                <!-- Affichage du nom de la page -->
                <?php echo $pageName; ?>
            </a>
        <?php } // Fin de la boucle foreach ?>
    </div>
</footer> <!-- Fin du pied de page -->
