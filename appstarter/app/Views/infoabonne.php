<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "bibliotheque");
$abonne_id = $_SESSION['abonne_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $stmt = $mysqli->prepare("UPDATE abonnes SET nom=?, prenom=?, email=? WHERE id=?");
    $stmt->bind_param("sssi", $nom, $prenom, $email, $abonne_id);
    $stmt->execute();
    echo "Infos mises à jour.";
}

$result = $mysqli->query("SELECT * FROM abonnes WHERE id = $abonne_id");
$abonne = $result->fetch_assoc();
?>

<form method="POST">
    Nom: <input name="nom" value="<?= $abonne['nom'] ?>"><br>
    Prénom: <input name="prenom" value="<?= $abonne['prenom'] ?>"><br>
    Email: <input name="email" value="<?= $abonne['email'] ?>"><br>
    <button type="submit">Modifier</button>
</form>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations de l’abonné</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            color: #003366;
            padding: 40px;
        }
        h1 {
            text-align: center;
        }
        .info {
            max-width: 500px;
            margin: 30px auto;
            background-color: #e6f0ff;
            padding: 20px;
            border-radius: 8px;
        }
        .info p {
            font-size: 18px;
            margin: 10px 0;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Mes informations</h1>
    <div class="info">
        <p><strong>Nom :</strong> Dupont</p>
        <p><strong>Prénom :</strong> Jean</p>
        <p><strong>Email :</strong> jean.dupont@email.com</p>
        <p><strong>Numéro d'abonné :</strong> AB12345</p>
        <!-- Remplace avec tes données dynamiques -->
    </div>
    <a href="bibliotheque.php">Retour à la bibliothèque</a>
</body>
</html>

<a href="deconnexion.php">Déconnexion</a>
<a href="emprunts.php">Mes emprunts</a>
<a href="livres.php">Consulter les livres</a>
<a href="exemplaires_disponibles.php">Exemplaires disponibles</a>

