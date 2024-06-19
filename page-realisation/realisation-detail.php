<?php 

// Paramètres de connexion 
$serveur = "localhost"; 
$utilisateur = "root"; 
$mot_de_passe = "";
$base_de_donnees = "realisations";

// Établir la connexion 
 $connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Vérifier la connexion 
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
   echo "Connexion réussie à la base de données.";
}
// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Récupération des données du formulaire
  $titre = $_POST['titre'];
  $photo = $_POST['photo'];
  $texte = $_POST['texte'];
  

 // Requête d'insertion des données
 $sql = "SELECT * from projets";
 $result = mysqli_query($connexion, $sql);
 

  // Exécution de la requête d'insertion
  mysqli_query($connexion,$sql);
}


// Fermer la connexion

?>
