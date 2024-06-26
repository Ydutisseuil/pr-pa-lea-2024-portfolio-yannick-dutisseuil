<?php 
echo $_GET['id'];

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
   echo "Connexion réussie à la base de données.";
}
 // Requête d'insertion des données
$sql = "SELECT * from projets WHERE id=" . $_GET['id'];
$result = mysqli_query($connexion, $sql);

  // Exécution de la requête d'insertion
mysqli_query($connexion,$sql);

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
    <link rel="icon" href="favicon.ico">
    <title>Realisation detail</title>
</head>
<body>
  <section>
      <div>
          <h1>
              Réalisations detail:
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
              </div>
          </div>
      </section>
  <?php endforeach; ?>
</body>
</html>
