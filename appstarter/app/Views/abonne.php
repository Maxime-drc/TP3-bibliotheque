<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Bibliotheque</title>
</head>
<body>
    <h1>Bienvenue Utilisateur</h1>
    <p>BIBLIOTHEQUE</p>
</body>
</html>

<h2>Mon Profil</h2>

<form method="post" action="/abonne/modifierProfil">
    Nom: <input type="text" name="nom_abonne" value="<?= $abonne['nom_abonne'] ?>"><br>
    Date de naissance: <input type="date" name="date_naissance_abonne" value="<?= $abonne['date_naissance_abonne'] ?>"><br>
    Adresse: <input type="text" name="adresse_abonne" value="<?= $abonne['adresse_abonne'] ?>"><br>
    Téléphone: <input type="text" name="telephone_abonne" value="<?= $abonne['telephone_abonne'] ?>"><br>
    CSP: <input type="text" name="CSP_abonne" value="<?= $abonne['CSP_abonne'] ?>"><br>
    <button type="submit">Modifier</button>
</form>

<h2>Créer un compte abonné</h2>

<form action="/abonne/creer" method="post">
    Nom: <input type="text" name="nom_abonne" required><br>
    Date de naissance: <input type="date" name="date_naissance_abonne"><br>
    Adresse: <input type="text" name="adresse_abonne"><br>
    Téléphone: <input type="text" name="telephone_abonne"><br>
    CSP: <input type="text" name="CSP_abonne"><br>
    Mot de passe: <input type="password" name="mot_de_passe" required><br>
    <button type="submit">Créer le compte</button>
</form>
