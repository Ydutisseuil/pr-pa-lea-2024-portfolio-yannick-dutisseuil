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

// Fermer la connexion
mysqli_close($connexion);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Realisation"content="monter les realisations avec une description">
    <link rel="stylesheet" href="../style/formulaire.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/realisation.css">
    <link rel="icon" href="../favicon.ico">
    <title>Realisation</title>
</head>
<body>
    <nav class="nav">
        <ul>            
            <li><a href="../index.php">Accueil</a></li> 
            <li><a href="../page-contact/contact.php">Contact</a></li>
            <li><a href="../page-cv/mon-cv.php">Mon-cv</a></li>
            <li><a href="../page-realisation/realisation.php">réalisation</a></li>
        </ul>
    </nav>
    <section>
        <div>
            <h1>
                Réalisations / Projets :
            </h1>
        </div>
    </section>
    
    <?php foreach ($result as $row): ?>
        <section class="bloc-projet1">
            <div class="projet1">
                <h2 class="titre-projet1">
                    <?= htmlspecialchars($row['titre']) ?>
                </h2>
            </div>
            <div class="Capture-ecran1">
                <img class="Capture1" src="../images/<?=htmlspecialchars($row['photo']) ?>" alt="image">
            </div>
            <div class="texte-projet1">
                <p class="texte1">
                    <?= htmlspecialchars($row['texte']) ?>
                </p>
                <div class="bouton">
                    <a href="realisation-detail.php?id=<?= htmlspecialchars($row['id']) ?>">
                    <input class="bouton-savoir" type="button" value="En savoir +">
                </div>
            </div>
        </section>
    <?php endforeach; ?>

   
    <footer>
        <ul>
            <li><a href="../index.php">Accueil</a></li> 
            <li><a href="../page-contact/contact.php">Contact</a></li>
            <li><a href="../page-cv/mon-cv.php">Mon-cv</a></li>
            <li><a href="../page-realisation/realisation.php">réalisation</a></li>
        </ul>
        <p>
           <br> © 2024 Site-crée-par-Dutisseuil-Yannick<br>
            télèphone: 06.02.03.04.05<br>
            e-mail:jesuispasla@introuvable.fr
        </p>
    </footer>
    
</body>
</html>









