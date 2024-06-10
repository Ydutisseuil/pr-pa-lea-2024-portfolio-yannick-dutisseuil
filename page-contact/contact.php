<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="contact-formulaire"content="formulaire-de-contact">
    <link rel="stylesheet" href="./style/formulaire.css">
    <title>contact</title>
</head>
<body>
    <section class="formulaire-container">
        <h2>Contactez-moi</h2>
        <form action="traitement.php" method="post">
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
    <section>
        <p class="mon-adresse">
            <lu>
                <li>Dutisseuil</li>
                <li>Yannick</li>
                <li>06.03.04.05.06</li>
                <li>19 rue du marche poitiers</li>
            </lu>
        </p>
    </section>
</body>
</html>