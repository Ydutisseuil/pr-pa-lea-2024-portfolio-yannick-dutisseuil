<?php 

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


// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
   
    // Requête d'insertion des données
    $sql = "INSERT INTO contact (nom, email, telephone, message)
    VALUES ('$nom', '$email', '$telephone', '$message')";

    // Exécution de la requête d'insertion
    mysqli_query($connexion,$sql);
}
header("Location: contact.php");


// Fermer la connexion
?>