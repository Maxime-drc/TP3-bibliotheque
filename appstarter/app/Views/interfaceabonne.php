<?php
session_start();
if (!isset($_SESSION['abonne_id'])) {
    header("Location: abonne_form.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Interface Abonné</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['abonne_nom']; ?></h1>

    <ul>
        <li><a href="liste_livres.php">Consulter les livres</a></li>
        <li><a href="exemplaires_disponibles.php">Exemplaires disponibles</a></li>
        <li><a href="mes_emprunts.php">Mes emprunts</a></li>
        <li><a href="mes_infos.php">Mes informations</a></li>
    </ul>

    <a href="logout.php">Se déconnecter</a>
</body>
</html>
