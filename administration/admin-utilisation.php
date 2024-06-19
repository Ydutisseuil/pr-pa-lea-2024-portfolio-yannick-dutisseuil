<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/realisation.css">
    <link rel="stylesheet" href="../style/admin-utilisation.css">
    <title>admin realisation</title>
</head>
<body>
    <h1>
        realisation
    </h1>
</body>
</html>

<?php

//Connexion

// Paramètres de connexion 
$serveur = "localhost"; 
$utilisateur = "root"; 
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-yannick-dutisseuil";

// Établir la connexion 

$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Vérifier la connexion 
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
   // echo "Connexion réussie à la base de données.";

} 
// Requete SELECT

// Requête d'insertion des données
$sql = "SELECT * from projets";
$result = mysqli_query($connexion, $sql);

// Foreach 
 foreach ($result as $row) {
            echo '

    <section class="bloc-projet1">
        <div class="projet1">
            <h2 class="titre-projet1">
                ' . htmlspecialchars($row['titre']) . '   
            </h2>
        </div>
        <div class="Capture-ecran1">
            <img class="Capture1" src="../images/' . htmlspecialchars($row['photo']) . '" alt="image">
        </div>
        <div class="texte-projet1">
            <p class="texte1">
                ' . htmlspecialchars($row['texte']) . '
            </p>
            <div class="bouton">
                <a href="realisation-detail.php?id=' . htmlspecialchars($row['id']) . '">
                <input class="bouton-savoir+" type="button" value="En savoir +">
            </div>
        </div>
        <div>
            <div class="bouton-cree">
                <input class="bouton-cree" type="button" value="cree">
            </div>
            <div class="bouton-effacer">
                <img class="corbeille" src="../images/effacer.jpg" alt="Effacer" class="buton-image">
            </div>
            <div class="bouton-modif">
                <img class="modif" src="../images/edite.jpg" alt="edite" class="buton-image">
            </div>
        </div>    
    </section>';
    }

// Fermer la connexion
mysqli_close($connexion);

?>

