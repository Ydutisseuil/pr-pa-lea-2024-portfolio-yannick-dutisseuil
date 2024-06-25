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
   // echo "Connexion réussie à la base de données.";

} 

// Requête 
$sql = "SELECT * from projets WHERE id= " .$_GET['id'];
$result = mysqli_query($connexion, $sql);
$projet = mysqli_fetch_assoc($result);

// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données du formulaire
    $titre = $_POST['titre'];
    $photo = $_POST['photo'];
    $texte = $_POST['texte'];
        
    
    // Requête d'insertion des données
    $sql = "INSERT INTO projets (`titre`,`photo`,`texte`)
    VALUES ('$titre', '$photo', '$texte')";
    

    // Exécution de la requête d'insertion
    mysqli_query($connexion,$sql);
}


// Fermer la connexion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="contact-formulaire"content="formulaire-de-contact">
    <link rel="stylesheet" href="../style/formulaire.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="icon" href="favicon.ico">
    <title>admin-realisation-modif</title>
</head>
<body >
    <section>
        <h2>realisation-modif</h2>
        
        <form action="" method="post">
            <label for="titre">titre :</label><br>
            <input type="text" id="titre" name="titre" required value="<?php echo $projet['titre']; ?>"><br><br>

            <label for="photo">image :</label><br>
            <input type="photo" id="photo" name="photo" required value="<?php echo $projet['photo']; ?>"><br><br>

            <label for="texte">description :</label><br>
            <input type="texte" id="texte" name="texte" required value="<?php echo $projet['texte']; ?>"><br><br>

            <input type="submit" value="Envoyer">
        </form>
</body>
