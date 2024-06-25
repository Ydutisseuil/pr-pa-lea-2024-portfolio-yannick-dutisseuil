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


if (isset($_GET['id'])) {
    $id=$_GET['id'];   
    $req="DELETE FROM `projets` WHERE `id` =".$id;
    $result=mysqli_query($connexion, $req);
}

// Requête d'insertion des données
$sql = "SELECT * from projets";
$result = mysqli_query($connexion, $sql);

// Foreach 
foreach ($result as $projet) {
   
    echo ';
        <div class="">
            <h3>'. $projet['titre'] .'</h3>
            <a href="admin-realisation-modf.php?id='. $projet['id'] .'">modifier</a>
            <a href="admin-liste-realisation.php?id='. $projet['id'] .'">supprimer</a>
            
        </div>
';
}
echo '<a href="admin-realisation-ajout.php">ajout</a>';

