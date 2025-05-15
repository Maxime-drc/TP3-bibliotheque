<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion / Inscription Abonné</title>
</head>
<body>
    <h2>Connexion Abonné</h2>
    <form method="POST" action="connexion_abonne.php">
        <label>Matricule:</label>
        <input type="text" name="matricule" required><br>
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>
        <button type="submit">Se connecter</button>
    </form>

    <h2>Créer un compte</h2>
    <form method="POST" action="inscription_abonne.php">
        <label>Matricule:</label>
        <input type="text" name="matricule" required><br>
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>
        <button type="submit">Créer le compte</button>
    </form>
</body>
</html>
