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
    <link rel="icon" href="../favicon.ico">
    <title>contact</title>
</head>
<body class="background-image">
    <nav class="nav">
        <ul>  
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="../page-contact/contact.php">contact</a></li>         
            <li><a href="../page-cv/mon-cv.php">Mon-cv</a></li>
            <li><a href="../page-realisation/realisation.php">réalisation</a></li>
        </ul>
    </nav>
    <section class="formulaire-container">
        <h2>Contactez-moi</h2>
        <form action="" method="post">
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="email">E-mail :</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telephone">Téléphone :</label><br>
            <input type="tel" id="telephone" name="telephone" required><br><br>

            <label for="message">Message :</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <input type="submit" value="Envoyer">
        </form>
    </section>
    <section class="adresse">
        <div class="liste_adresse">
            <p class="mon-adresse">
                <lu>
                    <li>Dutisseuil</li>
                    <li>Yannick</li>
                    <li>06.03.04.05.06</li>
                    <li>19 rue du marche poitiers</li>
                </lu>
            </p>
        </div>
    </section>
    <footer>
        <ul>  
            <li><a href="../index.php">Accueil</a></li> 
            <li><a href="../page-contact/contact.php">Contact</a></li>
            <li><a href="../page-cv/mon-cv.php">Mon-cv</a></li>
            <li><a href="../page-realisation/realisation.php">réalisation</a></li>
        </ul>
        <p>
           <p> © 2024 Site-crée-par-Dutisseuil-Yannick</p>
            <p>télèphone: 06.02.03.04.05</p>
        <p>e-mail:jesuispasla@introuvable.fr</p>
        </p>
    </footer>
</body>
</html>